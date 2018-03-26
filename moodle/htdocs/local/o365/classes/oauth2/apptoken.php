<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * @package local_o365
 * @author James McQuillan <james.mcquillan@remote-learner.net>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright (C) 2014 onwards Microsoft, Inc. (http://microsoft.com/)
 */

namespace local_o365\oauth2;

/**
 * Represents an oauth2 token.
 */
class apptoken extends \local_o365\oauth2\token {

    /**
     * Get a token instance for a new resource.
     *
     * @param string $resource The new resource.
     * @param \local_o365\oauth2\clientdata $clientdata Client information.
     * @param \local_o365\httpclientinterface $httpclient An HTTP client.
     * @return \local_o365\oauth2\token|bool A constructed token for the new resource, or false if failure.
     */
    public static function get_for_new_resource($userid, $resource, \local_o365\oauth2\clientdata $clientdata, $httpclient) {
        $token = static::get_app_token($resource, $clientdata, $httpclient);
        if (!empty($token)) {
            static::store_new_token(null, $token['access_token'], $token['expires_on'], null, $token['scope'], $token['resource']);
            return static::instance(null, $resource, $clientdata, $httpclient);
        } else {
            return false;
        }
    }

    /**
     * Get an app-only token.
     *
     * This is used by both get_for_new_resource and refresh, since refreshing an app-token is the same as
     * getting a new token.
     *
     * @param string $resource The desired token resource.
     * @param \local_o365\oauth2\clientdata $clientdata Client credentials object.
     * @param \local_o365\httpclientinterface $httpclient An HTTP client.
     * @return array|bool If successful, an array of token parameters. False if unsuccessful.
     */
    public static function get_app_token($resource, \local_o365\oauth2\clientdata $clientdata, $httpclient) {
        $params = [
            'client_id' => $clientdata->get_clientid(),
            'client_secret' => $clientdata->get_clientsecret(),
            'grant_type' => 'client_credentials',
            'resource' => $resource,
        ];
        $params = http_build_query($params, '', '&');
        $tokenendpoint = $clientdata->get_apptokenendpoint();
        $header = [
            'Content-Type: application/x-www-form-urlencoded',
            'Content-Length: '.strlen($params)
        ];
        $httpclient->resetHeader();
        $httpclient->setHeader($header);
        $tokenresult = $httpclient->post($tokenendpoint, $params);
        $tokenresult = @json_decode($tokenresult, true);
        if (!empty($tokenresult) && isset($tokenresult['token_type']) && $tokenresult['token_type'] === 'Bearer') {
            if (empty($tokenresult['scope'])) {
                $tokenresult['scope'] = '';
            }
            return $tokenresult;
        } else {
            $errmsg = 'Problem encountered getting a new token.';
            // Clear tokens for privacy.
            if (isset($tokenresult['access_token'])) {
                $tokenresult['access_token'] = '---';
            }
            if (isset($tokenresult['refresh_token'])) {
                $tokenresult['refresh_token'] = '---';
            }
            $debuginfo = [
                'tokenresult' => $tokenresult,
                'resource' => $resource
            ];
            \local_o365\utils::debug($errmsg, 'local_o365\oauth2\token::get_for_new_resource', $debuginfo);
            return false;
        }
    }

    /**
     * Refresh the appication only token.
     *
     * @return bool Success/Failure.
     */
    public function refresh() {
        $result = static::get_app_token($this->resource, $this->clientdata, $this->httpclient);
        if (!empty($result) && is_array($result) && isset($result['access_token'])) {
            $origresource = $this->resource;
            $this->token = $result['access_token'];
            $this->expiry = $result['expires_on'];
            $this->refreshtoken = $result['access_token'];
            $this->scope = $result['scope'];
            $this->resource = $result['resource'];
            $existingtoken = static::get_stored_token(null, $origresource);
            if (!empty($existingtoken)) {
                $newtoken = [
                    'scope' => $this->scope,
                    'token' => $this->token,
                    'expiry' => $this->expiry,
                    'resource' => $this->resource
                ];
                $this->update_stored_token($existingtoken, $newtoken);
            } else {
                static::store_new_token(null, $this->token, $this->expiry, $this->refreshtoken, $this->scope, $this->resource);
            }
            return true;
        } else {
            throw new \moodle_exception('errorcouldnotrefreshtoken', 'local_o365');
        }
    }

    /**
     * Get stored token for a user and resourse.
     *
     * @param int $userid The ID of the user to get the token for.
     * @param string $resource The resource to get the token for.
     * @return array Array of token data.
     */
    protected static function get_stored_token($userid, $resource) {
        $tokens = get_config('local_o365', 'apptokens');
        $tokens = unserialize($tokens);
        if (isset($tokens[$resource])) {
            // App tokens do not have a user.
            $tokens[$resource]['user_id'] = null;
            // App tokens do not have a refresh token.
            $tokens[$resource]['refreshtoken'] = $tokens[$resource]['token'];
            return $tokens[$resource];
        } else {
            return false;
        }
    }

    /**
     * Update the stored token.
     *
     * @param array $existingtoken Array of existing token data.
     * @param array $newtoken Array of new token data.
     * @return bool Success/Failure.
     */
    protected function update_stored_token($existingtoken, $newtoken) {
        $tokens = get_config('local_o365', 'apptokens');
        $tokens = unserialize($tokens);
        if (isset($tokens[$existingtoken['resource']])) {
            unset($tokens[$existingtoken['resource']]);
        }
        // App tokens do not use refresh tokens.
        if (isset($newtoken['refreshtoken'])) {
            unset($newtoken['refreshtoken']);
        }
        $tokens[$newtoken['resource']] = $newtoken;
        $tokens = serialize($tokens);
        set_config('apptokens', $tokens, 'local_o365');
        return true;
    }

    /**
     * Delete a stored token.
     *
     * @param array $existingtoken The existing token record.
     * @return bool Success/Failure.
     */
    protected function delete_stored_token($existingtoken) {
        $tokens = get_config('local_o365', 'apptokens');
        $tokens = unserialize($tokens);
        if (isset($tokens[$existingtoken['resource']])) {
            unset($tokens[$existingtoken['resource']]);
        }
        $tokens = serialize($tokens);
        set_config('apptokens', $tokens, 'local_o365');
        return true;
    }

    /**
     * Store a new app token.
     *
     * @param string $token Token access token.
     * @param int $expiry Token expiry timestamp.
     * @param string $refreshtoken Token refresh token (unused in this token type).
     * @param string $scope Token scope.
     * @param string $resource Token resource.
     * @return array Array of new token information.
     */
    public static function store_new_token($userid, $token, $expiry, $refreshtoken, $scope, $resource) {
        $tokens = get_config('local_o365', 'apptokens');
        $tokens = unserialize($tokens);
        $newtoken = [
            'token' => $token,
            'expiry' => $expiry,
            'scope' => $scope,
            'resource' => $resource,
        ];
        $tokens[$resource] = $newtoken;
        $tokens = serialize($tokens);
        set_config('apptokens', $tokens, 'local_o365');
        return $newtoken;
    }
}
