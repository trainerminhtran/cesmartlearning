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
 * Class representing oauth2 client data.
 */
class clientdata {
    /** @var string The registerd client ID. */
    protected $clientid;

    /** @var string The registered client secreet. */
    protected $clientsecret;

    /** @var string The authorization endpoint URI. */
    protected $authendpoint;

    /** @var string The token endpoint URI. */
    protected $tokenendpoint;

    /** @var boolean The app-only token endpoint URI. */
    protected $apptokenendpoint = false;

    /**
     * Constructor.
     *
     * @param string $clientid The registerd client ID.
     * @param string $clientsecret The registered client secreet.
     * @param string $authendpoint The authorization endpoint URI.
     * @param string $tokenendpoint The token endpoint URI.
     * @param string $apptokenendpoint The app-only token endpoint URI.
     */
    public function __construct($clientid, $clientsecret, $authendpoint, $tokenendpoint, $apptokenendpoint = null) {
        $this->clientid = $clientid;
        $this->clientsecret = $clientsecret;
        $this->authendpoint = $authendpoint;
        $this->tokenendpoint = $tokenendpoint;
        if (!empty($apptokenendpoint)) {
            $this->apptokenendpoint = $apptokenendpoint;
        } else {
            $tenant = get_config('local_o365', 'aadtenant');
            if (!empty($tenant)) {
                $this->apptokenendpoint = 'https://login.microsoftonline.com/'.$tenant.'/oauth2/token';
            } else {
                \local_o365\utils::debug('Did not populate clientdata:apptokenendpoint because no tenant was present');
            }
        }
    }

    /**
     * Get an instance from auth_oidc config.
     *
     * @return \local_o365\oauth2\clientdata The constructed client data creds.
     */
    public static function instance_from_oidc() {
        $cfg = get_config('auth_oidc');
        if (empty($cfg) || !is_object($cfg)) {
            throw new \moodle_exception('erroracpauthoidcnotconfig', 'local_o365');
        }
        if (empty($cfg->clientid) || empty($cfg->clientsecret) || empty($cfg->authendpoint) || empty($cfg->tokenendpoint)) {
            throw new \moodle_exception('erroracpauthoidcnotconfig', 'local_o365');
        }
        return new static($cfg->clientid, $cfg->clientsecret, $cfg->authendpoint, $cfg->tokenendpoint);
    }

    /**
     * Get the registerd client ID.
     *
     * @return string The registerd client ID.
     */
    public function get_clientid() {
        return $this->clientid;
    }

    /**
     * Get the registered client secreet.
     *
     * @return string The registered client secreet.
     */
    public function get_clientsecret() {
        return $this->clientsecret;
    }
    /**
     * Get the authorization endpoint URI.
     *
     * @return string The authorization endpoint URI.
     */
    public function get_authendpoint() {
        return $this->authendpoint;
    }

    /**
     * Get the token endpoint URI.
     *
     * @return string The token endpoint URI.
     */
    public function get_tokenendpoint() {
        return $this->tokenendpoint;
    }

    /**
     * Get the token for app-only authentication.
     *
     * @return string The app-only token endpoint URI.
     */
    public function get_apptokenendpoint() {
        return $this->apptokenendpoint;
    }
}
