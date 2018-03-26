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

defined('MOODLE_INTERNAL') || die();

global $CFG;

/**
 * Tests \local_o365\feature\usersync\main.
 *
 * @group local_o365
 * @group office365
 * @codeCoverageIgnore
 */
class local_o365_usersync_testcase extends \advanced_testcase {
    /**
     * Perform setup before every test. This tells Moodle's phpunit to reset the database after every test.
     */
    protected function setUp() {
        parent::setUp();
        $this->resetAfterTest(true);
    }

    /**
     * Get a mock token object to use when constructing the API client.
     *
     * @return \local_o365\oauth2\token The mock token object.
     */
    protected function get_mock_clientdata() {
        $oidcconfig = (object)[
            'clientid' => 'clientid',
            'clientsecret' => 'clientsecret',
            'authendpoint' => 'http://example.com/auth',
            'tokenendpoint' => 'http://example.com/token'
        ];

        $clientdata = new \local_o365\oauth2\clientdata($oidcconfig->clientid, $oidcconfig->clientsecret,
                $oidcconfig->authendpoint, $oidcconfig->tokenendpoint);
        return $clientdata;
    }

    /**
     * Get a mock token object to use when constructing the API client.
     *
     * @return \local_o365\oauth2\token The mock token object.
     */
    protected function get_mock_token() {
        $httpclient = new \local_o365\tests\mockhttpclient();

        $tokenrec = (object)[
            'token' => 'token',
            'expiry' => time() + 1000,
            'refreshtoken' => 'refreshtoken',
            'scope' => 'scope',
            'user_id' => '2',
            'resource' => 'resource',
        ];

        $clientdata = $this->get_mock_clientdata();
        $token = new \local_o365\oauth2\token($tokenrec->token, $tokenrec->expiry, $tokenrec->refreshtoken,
                $tokenrec->scope, $tokenrec->resource, $tokenrec->user_id, $clientdata, $httpclient);
        return $token;
    }

    /**
     * Get sample Azure AD userdata.
     *
     * @param int $i A counter to generate unique data.
     * @return array Array of Azure AD user data.
     */
    protected function get_aad_userinfo($i = 0) {
        return [
            'odata.type' => 'Microsoft.WindowsAzure.ActiveDirectory.User',
            'objectType' => 'User',
            'objectId' => '00000000-0000-0000-0000-00000000000'.$i,
            'city' => 'Toronto',
            'country' => ($i == 3) ? 'Canada' : 'CA',
            'department' => 'Dev',
            'givenName' => 'Test',
            'userPrincipalName' => 'testuser'.$i.'@example.onmicrosoft.com',
            'mail' => 'testuser'.$i.'@example.onmicrosoft.com',
            'surname' => 'User'.$i,
            'preferredLanguage' => ($i == 3) ? 'sa-IN' : 'en-US',
        ];
    }

    /**
     * Dataprovider for test_create_user_from_aaddata.
     *
     * @return array Array of test parameters.
     */
    public function dataprovider_create_user_from_aaddata() {
        global $CFG;
        $tests = [];

        $tests['fulldata'] = [
            [
                'odata.type' => 'Microsoft.WindowsAzure.ActiveDirectory.User',
                'objectType' => 'User',
                'objectId' => '00000000-0000-0000-0000-000000000001',
                'city' => 'Toronto',
                'country' => 'CA',
                'department' => 'Dev',
                'givenName' => 'Test',
                'userPrincipalName' => 'testuser1@example.onmicrosoft.com',
                'mail' => 'testuser1@example.onmicrosoft.com',
                'surname' => 'User1',
            ],
            [
                'auth' => 'oidc',
                'username' => 'testuser1@example.onmicrosoft.com',
                'firstname' => 'Test',
                'lastname' => 'User1',
                'email' => 'testuser1@example.onmicrosoft.com',
                'city' => 'Toronto',
                'country' => 'CA',
                'department' => 'Dev',
                'lang' => 'en',
                'confirmed' => '1',
                'deleted' => '0',
                'mnethostid' => $CFG->mnet_localhost_id,
            ],
        ];

        $tests['nocity'] = [
            [
                'odata.type' => 'Microsoft.WindowsAzure.ActiveDirectory.User',
                'objectType' => 'User',
                'objectId' => '00000000-0000-0000-0000-000000000002',
                'country' => 'CA',
                'department' => 'Dev',
                'givenName' => 'Test',
                'userPrincipalName' => 'testuser2@example.onmicrosoft.com',
                'mail' => 'testuser2@example.onmicrosoft.com',
                'surname' => 'User2',
            ],
            [
                'auth' => 'oidc',
                'username' => 'testuser2@example.onmicrosoft.com',
                'firstname' => 'Test',
                'lastname' => 'User2',
                'email' => 'testuser2@example.onmicrosoft.com',
                'city' => '',
                'country' => 'CA',
                'department' => 'Dev',
                'lang' => 'en',
                'confirmed' => '1',
                'deleted' => '0',
                'mnethostid' => $CFG->mnet_localhost_id,
            ],
        ];

        $tests['nocountry'] = [
            [
                'odata.type' => 'Microsoft.WindowsAzure.ActiveDirectory.User',
                'objectType' => 'User',
                'objectId' => '00000000-0000-0000-0000-000000000003',
                'department' => 'Dev',
                'givenName' => 'Test',
                'userPrincipalName' => 'testuser3@example.onmicrosoft.com',
                'mail' => 'testuser3@example.onmicrosoft.com',
                'surname' => 'User3',
            ],
            [
                'auth' => 'oidc',
                'username' => 'testuser3@example.onmicrosoft.com',
                'firstname' => 'Test',
                'lastname' => 'User3',
                'email' => 'testuser3@example.onmicrosoft.com',
                'city' => '',
                'country' => '',
                'department' => 'Dev',
                'lang' => 'en',
                'confirmed' => '1',
                'deleted' => '0',
                'mnethostid' => $CFG->mnet_localhost_id,
            ],
        ];

        $tests['nodepartment'] = [
            [
                'odata.type' => 'Microsoft.WindowsAzure.ActiveDirectory.User',
                'objectType' => 'User',
                'objectId' => '00000000-0000-0000-0000-000000000004',
                'givenName' => 'Test',
                'userPrincipalName' => 'testuser4@example.onmicrosoft.com',
                'mail' => 'testuser4@example.onmicrosoft.com',
                'surname' => 'User4',
            ],
            [
                'auth' => 'oidc',
                'username' => 'testuser4@example.onmicrosoft.com',
                'firstname' => 'Test',
                'lastname' => 'User4',
                'email' => 'testuser4@example.onmicrosoft.com',
                'city' => '',
                'country' => '',
                'department' => '',
                'lang' => 'en',
                'confirmed' => '1',
                'deleted' => '0',
                'mnethostid' => $CFG->mnet_localhost_id,
            ],
        ];

        return $tests;
    }

    /**
     * Test create_user_from_aaddata method.
     *
     * @dataProvider dataprovider_create_user_from_aaddata
     * @param array $aaddata The Azure AD user data to create the user from.
     * @param array $expecteduser The expected user data to be created.
     */
    public function test_create_user_from_aaddata($aaddata, $expecteduser) {
        global $DB;
        $httpclient = new \local_o365\tests\mockhttpclient();
        $clientdata = $this->get_mock_clientdata();
        $apiclient = new \local_o365\feature\usersync\main($clientdata, $httpclient);
        $apiclient->create_user_from_aaddata($aaddata);

        $userparams = ['auth' => 'oidc', 'username' => $aaddata['mail']];
        $this->assertTrue($DB->record_exists('user', $userparams));
        $createduser = $DB->get_record('user', $userparams);

        foreach ($expecteduser as $k => $v) {
            $this->assertEquals($v, $createduser->$k);
        }
    }

    /**
     * Test sync_users method when creating users.
     */
    public function test_sync_users_create() {
        global $CFG, $DB;
        set_config('aadsync', 'create', 'local_o365');
        for ($i = 1; $i <= 2; $i++) {
            $muser = [
                'auth' => 'oidc',
                'deleted' => '0',
                'mnethostid' => $CFG->mnet_localhost_id,
                'username' => 'testuser'.$i.'@example.onmicrosoft.com',
                'firstname' => 'Test',
                'lastname' => 'User'.$i,
                'email' => 'testuser'.$i.'@example.onmicrosoft.com',
                'lang' => 'en'
            ];
            $DB->insert_record('user', (object)$muser);

            $token = [
                'oidcuniqid' => '00000000-0000-0000-0000-00000000000'.$i,
                'authcode' => '000',
                'username' => 'testuser'.$i.'@example.onmicrosoft.com',
                'scope' => 'test',
                'resource' => \local_o365\rest\azuread::get_resource(),
                'token' => '000',
                'expiry' => '9999999999',
                'refreshtoken' => 'fsdfsdf'.$i,
                'idtoken' => 'sdfsdfsdf'.$i,
            ];
            $DB->insert_record('auth_oidc_token', (object)$token);
        }

        $response = [
            'value' => [
                $this->get_aad_userinfo(1),
                $this->get_aad_userinfo(3),
            ],
        ];
        $response = json_encode($response);
        $clientdata = $this->get_mock_clientdata();
        $httpclient = new \local_o365\tests\mockhttpclient();
        $httpclient->set_response($response);

        $apiclient = new \local_o365\rest\azuread($this->get_mock_token(), $httpclient);
        $usersync = new \local_o365\feature\usersync\main($clientdata, $httpclient);
        $users = $apiclient->get_users();
        $usersync->sync_users($users['value']);

        $existinguser = ['auth' => 'oidc', 'username' => 'testuser1@example.onmicrosoft.com'];
        $this->assertTrue($DB->record_exists('user', $existinguser));

        $createduser = ['auth' => 'oidc', 'username' => 'testuser3@example.onmicrosoft.com'];
        $this->assertTrue($DB->record_exists('user', $createduser));
        $createduser = $DB->get_record('user', $createduser);
        $this->assertEquals('Test', $createduser->firstname);
        $this->assertEquals('User3', $createduser->lastname);
        $this->assertEquals('testuser3@example.onmicrosoft.com', $createduser->email);
        $this->assertEquals('Toronto', $createduser->city);
        $this->assertEquals('CA', $createduser->country);
        $this->assertEquals('Dev', $createduser->department);
        $this->assertEquals('en', $createduser->lang);
    }

    /**
     * Test aadsync delete option.
     */
    public function test_sync_users_delete() {
        global $CFG, $DB;
        set_config('aadsync', 'create,delete', 'local_o365');

        $response = [
            'value' => [
                $this->get_aad_userinfo(1),
                $this->get_aad_userinfo(2),
                $this->get_aad_userinfo(3),
            ],
        ];

        $clientdata = $this->get_mock_clientdata();
        $httpclient = new \local_o365\tests\mockhttpclient();
        $httpclient->set_response(json_encode($response));

        $apiclient = new \local_o365\rest\azuread($this->get_mock_token(), $httpclient);
        $usersync = new \local_o365\feature\usersync\main($clientdata, $httpclient);
        $users = $apiclient->get_users();
        $usersync->sync_users($users['value']);

        // Simulate user logins - create mock tokens.
        for ($i =1; $i <=3; $i++) {
            $token = [
                'oidcuniqid' => '00000000-0000-0000-0000-00000000000'.$i,
                'authcode' => '000',
                'username' => 'testuser'.$i.'@example.onmicrosoft.com',
                'scope' => 'test',
                'resource' => \local_o365\rest\azuread::get_resource(),
                'token' => '000',
                'expiry' => '9999999999',
                'refreshtoken' => 'fsdfsdf'.$i,
                'idtoken' => 'sdfsdfsdf'.$i,
            ];
            $DB->insert_record('auth_oidc_token', (object)$token);
        }

        // Change user 2 to look like a non-synced user to test synced user checking.
        $user2 = $DB->get_record('user', ['username' => $response['value'][1]['userPrincipalName']]);
        $user2->username = 'sometestuser';
        $DB->update_record('user', $user2);

        // Now run sync again with deleted users marked.
        $response = [
            'value' => [
                $this->get_aad_userinfo(1),
                $this->get_aad_userinfo(2),
                $this->get_aad_userinfo(3),
            ],
        ];
        $response['value'][0]['aad.isDeleted'] = '1';
        $response['value'][1]['aad.isDeleted'] = '1';
        $clientdata = $this->get_mock_clientdata();
        $httpclient = new \local_o365\tests\mockhttpclient();
        $httpclient->set_response(json_encode($response));
        $apiclient = new \local_o365\rest\azuread($this->get_mock_token(), $httpclient);
        $usersync = new \local_o365\feature\usersync\main($clientdata, $httpclient);
        $users = $apiclient->get_users();
        $usersync->sync_users($users['value']);

        // User 1 should be suspended.
        $params = ['username' => $response['value'][0]['userPrincipalName']];
        $user = $DB->get_record('user', $params);
        $this->assertNotEmpty($user);
        $this->assertEquals(1, $user->suspended);

        // User 2 should not be suspended (not a synced user).
        $params = ['username' => $response['value'][1]['userPrincipalName']];
        $user = $DB->get_record('user', $params);
        $this->assertEmpty($user);
        $params = ['username' => 'sometestuser'];
        $user = $DB->get_record('user', $params);
        $this->assertNotEmpty($user);
        $this->assertEquals(0, $user->suspended);

        // User 3 should not be suspended (not marked deleted in AAD).
        $params = ['username' => $response['value'][2]['userPrincipalName']];
        $user = $DB->get_record('user', $params);
        $this->assertNotEmpty($user);
        $this->assertEquals(0, $user->suspended);
    }

}
