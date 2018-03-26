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

defined('MOODLE_INTERNAL') || die;

if (!$PAGE->requires->is_head_done()) {
    $PAGE->requires->jquery();
}
global $install;

// Define tab constants
if (!defined('LOCAL_O365_TAB_SETUP')) {
    /**
     * LOCAL_O365_TAB_SETUP - Setup settings.
     */
    define('LOCAL_O365_TAB_SETUP', 0);
    /**
     * LOCAL_O365_TAB_OPTIONS - Options to customize the plugins.
     */
    define('LOCAL_O365_TAB_OPTIONS', 1);
    /**
     * LOCAL_O365_TAB_TOOLS - Admin tools
     */
    define('LOCAL_O365_TAB_TOOLS', 2);
    /**
     * LOCAL_O365_TAB_CONNECTIONS - User connections table.
     */
    define('LOCAL_O365_TAB_CONNECTIONS', 4);
    /**
     * LOCAL_O365_TAB_SDS - School data sync
     */
    define('LOCAL_O365_TAB_SDS', 3);
}

if ($hassiteconfig) {
    $settings = new \admin_settingpage('local_o365', new lang_string('pluginname', 'local_o365'));
    $ADMIN->add('localplugins', $settings);

    $tabs = new \local_o365\adminsetting\tabs('local_o365/tabs', $settings->name, false);
    $tabs->addtab(LOCAL_O365_TAB_SETUP, new lang_string('settings_header_setup', 'local_o365'));
    $tabs->addtab(LOCAL_O365_TAB_OPTIONS, new lang_string('settings_header_options', 'local_o365'));
    $tabs->addtab(LOCAL_O365_TAB_TOOLS, new lang_string('settings_header_tools', 'local_o365'));
    $tabs->addtab(LOCAL_O365_TAB_SDS, new lang_string('settings_header_sds', 'local_o365'));
    $settings->add($tabs);

    $tab = $tabs->get_setting();

    if ($tab === LOCAL_O365_TAB_TOOLS || !empty($install)) {

        $label = new lang_string('settings_tools_tenants', 'local_o365');
        $linktext = new lang_string('settings_tools_tenants_linktext', 'local_o365');
        $linkurl = new \moodle_url('/local/o365/acp.php', ['mode' => 'tenants']);
        $desc = new lang_string('settings_tools_tenants_details', 'local_o365');
        $settings->add(new \local_o365\adminsetting\toollink('local_o365/tenants', $label, $linktext, $linkurl, $desc));

        $label = new lang_string('settings_healthcheck', 'local_o365');
        $linktext = new lang_string('settings_healthcheck_linktext', 'local_o365');
        $linkurl = new \moodle_url('/local/o365/acp.php', ['mode' => 'healthcheck']);
        $desc = new lang_string('settings_healthcheck_details', 'local_o365');
        $settings->add(new \local_o365\adminsetting\toollink('local_o365/healthcheck', $label, $linktext, $linkurl, $desc));

        $label = new lang_string('settings_userconnections', 'local_o365');
        $linktext = new lang_string('settings_userconnections_linktext', 'local_o365');
        $linkurl = new \moodle_url('/local/o365/acp.php', ['mode' => 'userconnections']);
        $desc = new lang_string('settings_userconnections_details', 'local_o365');
        $settings->add(new \local_o365\adminsetting\toollink('local_o365/userconnections', $label, $linktext, $linkurl, $desc));

        $label = new lang_string('settings_usermatch', 'local_o365');
        $linktext = new lang_string('settings_usermatch', 'local_o365');
        $linkurl = new \moodle_url('/local/o365/acp.php', ['mode' => 'usermatch']);
        $desc = new lang_string('settings_usermatch_details', 'local_o365');
        $settings->add(new \local_o365\adminsetting\toollink('local_o365/usermatch', $label, $linktext, $linkurl, $desc));

        $label = new lang_string('settings_maintenance', 'local_o365');
        $linktext = new lang_string('settings_maintenance_linktext', 'local_o365');
        $linkurl = new \moodle_url('/local/o365/acp.php', ['mode' => 'maintenance']);
        $desc = new lang_string('settings_maintenance_details', 'local_o365');
        $settings->add(new \local_o365\adminsetting\toollink('local_o365/maintenance', $label, $linktext, $linkurl, $desc));

    }
    if ($tab == LOCAL_O365_TAB_OPTIONS || !empty($install)) {

        $label = new lang_string('settings_options_usersync', 'local_o365');
        $desc = new lang_string('settings_options_usersync_desc', 'local_o365');
        $settings->add(new admin_setting_heading('local_o365_options_usersync', $label, $desc));

        $label = new lang_string('settings_aadsync', 'local_o365');
        $scheduledtasks = new \moodle_url('/admin/tool/task/scheduledtasks.php');
        $desc = new lang_string('settings_aadsync_details', 'local_o365', $scheduledtasks->out());
        $choices = [
            'create' => new lang_string('settings_aadsync_create', 'local_o365'),
            'delete' => new lang_string('settings_aadsync_delete', 'local_o365'),
            'match' => new lang_string('settings_aadsync_match', 'local_o365'),
            'matchswitchauth' => new lang_string('settings_aadsync_matchswitchauth', 'local_o365'),
            'appassign' => new lang_string('settings_aadsync_appassign', 'local_o365'),
            'photosync' => new lang_string('settings_aadsync_photosync', 'local_o365'),
            'photosynconlogin' => new lang_string('settings_aadsync_photosynconlogin', 'local_o365'),
        ];
        $default = [];
        $settings->add(new \local_o365\adminsetting\configmulticheckboxchoiceshelp('local_o365/aadsync', $label, $desc, $default, $choices));

        $key = 'local_o365/usersynccreationrestriction';
        $label = new lang_string('settings_usersynccreationrestriction', 'local_o365');
        $desc = new lang_string('settings_usersynccreationrestriction_details', 'local_o365');
        $default = [];
        $settings->add(new \local_o365\adminsetting\usersynccreationrestriction($key, $label, $desc, $default));

        $label = new lang_string('settings_fieldmap', 'local_o365');
        $desc = new lang_string('settings_fieldmap_details', 'local_o365');
        $default = \local_o365\adminsetting\usersyncfieldmap::defaultmap();
        $settings->add(new \local_o365\adminsetting\usersyncfieldmap('local_o365/fieldmap', $label, $desc, $default));

        $label = new lang_string('settings_options_features', 'local_o365');
        $desc = new lang_string('settings_options_features_desc', 'local_o365');
        $settings->add(new admin_setting_heading('local_o365_options_features', $label, $desc));

        $label = new lang_string('settings_usergroups', 'local_o365');
        $desc = new lang_string('settings_usergroups_details', 'local_o365');
        $settings->add(new \local_o365\adminsetting\usergroups('local_o365/creategroups', $label, $desc, 'off'));

        $label = new lang_string('settings_sharepointlink', 'local_o365');
        $desc = new lang_string('settings_sharepointlink_details', 'local_o365');
        $settings->add(new \local_o365\adminsetting\sharepointlink('local_o365/sharepointlink', $label, $desc, '', PARAM_RAW));

        $label = new lang_string('acp_sharepointcourseselect', 'local_o365');
        $desc = new lang_string('acp_sharepointcourseselect_desc', 'local_o365');
        $settingname = 'local_o365/sharepointcourseselect';
        $settings->add(new \local_o365\adminsetting\sharepointcourseselect($settingname, $label, $desc, 'none'));

        $label = new lang_string('settings_options_advanced', 'local_o365');
        $desc = new lang_string('settings_options_advanced_desc', 'local_o365');
        $settings->add(new admin_setting_heading('local_o365_options_advanced', $label, $desc));

        $label = new lang_string('settings_o365china', 'local_o365');
        $desc = new lang_string('settings_o365china_details', 'local_o365');
        $settings->add(new \admin_setting_configcheckbox('local_o365/chineseapi', $label, $desc, '0'));

        $label = new lang_string('settings_onenote', 'local_o365');
        $desc = new lang_string('settings_onenote_details', 'local_o365');
        $settings->add(new \admin_setting_configcheckbox('local_o365/onenote', $label, $desc, '0'));

        $label = new lang_string('settings_previewfeatures', 'local_o365');
        $desc = new lang_string('settings_previewfeatures_details', 'local_o365');
        $settings->add(new \admin_setting_configcheckbox('local_o365/enablepreview', $label, $desc, '0'));

        $label = new lang_string('settings_debugmode', 'local_o365');
        $logurl = new \moodle_url('/report/log/index.php', ['chooselog' => '1', 'modid' => 'site_errors']);
        $desc = new lang_string('settings_debugmode_details', 'local_o365', $logurl->out());
        $settings->add(new \admin_setting_configcheckbox('local_o365/debugmode', $label, $desc, '0'));

        $label = new lang_string('settings_switchauthminupnsplit0', 'local_o365');
        $desc = new lang_string('settings_switchauthminupnsplit0_details', 'local_o365');
        $settings->add(new \admin_setting_configtext('local_o365/switchauthminupnsplit0', $label, $desc, '10'));

        $label = new lang_string('settings_photoexpire', 'local_o365');
        $desc = new lang_string('settings_photoexpire_details', 'local_o365');
        $settings->add(new \admin_setting_configtext('local_o365/photoexpire', $label, $desc, '24'));

    }
    if ($tab == LOCAL_O365_TAB_CONNECTIONS || !empty($install)) {

    }
    if ($tab == LOCAL_O365_TAB_SETUP || !empty($install)) {

        $stepsenabled = 1;

        $configdesc = new \lang_string('settings_migration', 'local_o365');
        $settings->add(new admin_setting_heading('local_o365_setup_migration', '', $configdesc));

        // STEP 1: Registration.
        $oidcsettings = new \moodle_url('/admin/settings.php?section=authsettingoidc');
        $label = new lang_string('settings_setup_step1', 'local_o365');
        $desc = new lang_string('settings_setup_step1_desc', 'local_o365');
        $settings->add(new admin_setting_heading('local_o365_setup_step1', $label, $desc));

        $configkey = new \lang_string('settings_setup_step1_appiduri', 'local_o365');
        $configdesc = new \lang_string('settings_setup_step1_appiduri_desc', 'local_o365');
        $settings->add(new \local_o365\adminsetting\appiduri('local_o365/appiduri', $configkey, $configdesc));

        $configkey = new \lang_string('settings_setup_step1_signonurl', 'local_o365');
        $configdesc = new \lang_string('settings_setup_step1_signonurl_desc', 'local_o365');
        $settings->add(new \auth_oidc\form\adminsetting\redirecturi('local_o365/signonurl', $configkey, $configdesc));

        $configkey = new \lang_string('settings_setup_step1_replyurl', 'local_o365');
        $configdesc = new \lang_string('settings_setup_step1_replyurl_desc', 'local_o365');
        $settings->add(new \auth_oidc\form\adminsetting\redirecturi('local_o365/replyurl', $configkey, $configdesc));

        $configdesc = new \lang_string('settings_setup_step1clientcreds', 'local_o365');
        $settings->add(new admin_setting_heading('local_o365_setup_step1clientcreds', '', $configdesc));

        $configkey = new lang_string('settings_clientid', 'local_o365');
        $configdesc = new lang_string('settings_clientid_desc', 'local_o365');
        $settings->add(new admin_setting_configtext('auth_oidc/clientid', $configkey, $configdesc, '', PARAM_TEXT));

        $configkey = new lang_string('settings_clientsecret', 'local_o365');
        $configdesc = new lang_string('settings_clientsecret_desc', 'local_o365');
        $settings->add(new admin_setting_configtext('auth_oidc/clientsecret', $configkey, $configdesc, '', PARAM_TEXT));

        $configdesc = new \lang_string('settings_setup_step1_credentials_end', 'local_o365', (object)['oidcsettings' => $oidcsettings->out()]);
        $settings->add(new admin_setting_heading('local_o365_setup_step1_credentialsend', '', $configdesc));

        $configdesc = new \lang_string('settings_setup_step1_perms', 'local_o365', (object)['oidcsettings' => $oidcsettings->out()]);
        $settings->add(new admin_setting_heading('local_o365_setup_step1_perms', '', $configdesc));

        // STEP 2: Connection Method.
        $clientid = get_config('auth_oidc', 'clientid');
        $clientsecret = get_config('auth_oidc', 'clientsecret');
        if (!empty($clientid) && !empty($clientsecret)) {
            $stepsenabled = 2;
        } else {
            $configdesc = new \lang_string('settings_setup_step1_continue', 'local_o365');
            $settings->add(new admin_setting_heading('local_o365_setup_step1continue', '', $configdesc));
        }

        if ($stepsenabled === 2) {
            $label = new lang_string('settings_setup_step2', 'local_o365');
            $desc = new lang_string('settings_setup_step2_desc', 'local_o365');
            $settings->add(new admin_setting_heading('local_o365_setup_step2', $label, $desc));

            $label = new lang_string('settings_enableapponlyaccess', 'local_o365');
            $desc = new lang_string('settings_enableapponlyaccess_details', 'local_o365');
            $settings->add(new \admin_setting_configcheckbox('local_o365/enableapponlyaccess', $label, $desc, '1'));

            $label = new lang_string('settings_systemapiuser', 'local_o365');
            $desc = new lang_string('settings_systemapiuser_details', 'local_o365');
            $settings->add(new \local_o365\adminsetting\systemapiuser('local_o365/systemapiuser', $label, $desc, '', PARAM_RAW));

            $enableapponlyaccess = get_config('local_o365', 'enableapponlyaccess');
            $systemapiuser = get_config('local_o365', 'systemtokens');
            if (!empty($enableapponlyaccess) || !empty($systemapiuser)) {
                $stepsenabled = 3;
            } else {
                $configdesc = new \lang_string('settings_setup_step2_continue', 'local_o365');
                $settings->add(new admin_setting_heading('local_o365_setup_step2continue', '', $configdesc));
            }
        }

        // STEP 3: Consent and additional information.
        if ($stepsenabled === 3) {
            $label = new lang_string('settings_setup_step3', 'local_o365');
            $desc = new lang_string('settings_setup_step3_desc', 'local_o365');
            $settings->add(new admin_setting_heading('local_o365_setup_step3', $label, $desc));

            $label = new lang_string('settings_adminconsent', 'local_o365');
            $desc = new lang_string('settings_adminconsent_details', 'local_o365');
            $settings->add(new \local_o365\adminsetting\adminconsent('local_o365/adminconsent', $label, $desc, '', PARAM_RAW));

            $label = new lang_string('settings_aadtenant', 'local_o365');
            $desc = new lang_string('settings_aadtenant_details', 'local_o365');
            $default = '';
            $paramtype = PARAM_URL;
            $settings->add(new \local_o365\adminsetting\serviceresource('local_o365/aadtenant', $label, $desc, $default, $paramtype));

            $label = new lang_string('settings_odburl', 'local_o365');
            $desc = new lang_string('settings_odburl_details', 'local_o365');
            $default = '';
            $paramtype = PARAM_URL;
            $settings->add(new \local_o365\adminsetting\serviceresource('local_o365/odburl', $label, $desc, $default, $paramtype));

            $aadtenant = get_config('local_o365', 'aadtenant');
            $odburl = get_config('local_o365', 'odburl');
            if (!empty($aadtenant) && !empty($odburl)) {
                $stepsenabled = 4;
            }
        }

        // Step 4: Verify.
        if ($stepsenabled === 4) {
            $label = new lang_string('settings_setup_step4', 'local_o365');
            $desc = new lang_string('settings_setup_step4_desc', 'local_o365');
            $settings->add(new admin_setting_heading('local_o365_setup_step4', $label, $desc));

            $label = new lang_string('settings_azuresetup', 'local_o365');
            $desc = new lang_string('settings_azuresetup_details', 'local_o365');
            $settings->add(new \local_o365\adminsetting\azuresetup('local_o365/azuresetup', $label, $desc));
        }
    }
    if ($tab == LOCAL_O365_TAB_SDS || !empty($install)) {
        $scheduledtasks = new \moodle_url('/admin/tool/task/scheduledtasks.php');
        $desc = new lang_string('settings_sds_intro_previewwarning', 'local_o365');
        $desc .= new lang_string('settings_sds_intro_desc', 'local_o365', $scheduledtasks->out());
        $settings->add(new admin_setting_heading('local_o365_sds_intro', '', $desc));

        try {
            $httpclient = new \local_o365\httpclient();
            $clientdata = \local_o365\oauth2\clientdata::instance_from_oidc();
            $resource = \local_o365\rest\sds::get_resource();
            $token = \local_o365\oauth2\systemapiusertoken::instance(null, $resource, $clientdata, $httpclient);
            $schools = null;
            if (!empty($token)) {
                $apiclient = new \local_o365\rest\sds($token, $httpclient);
                $schools = $apiclient->get_schools();
                $schools = $schools['value'];
            }
        } catch (\Exception $e) {
            \local_o365\utils::debug($e->getMessage(), 'settings.php', $e);
            $schools = [];
        }

        if (!empty($schools)) {
            $label = new lang_string('settings_sds_profilesync', 'local_o365');
            $desc = new lang_string('settings_sds_profilesync_desc', 'local_o365');
            $settings->add(new admin_setting_heading('local_o365_sds_profilesync', $label, $desc));

            $label = new lang_string('settings_sds_profilesync_enabled', 'local_o365');
            $desc = new lang_string('settings_sds_profilesync_enabled_desc', 'local_o365');
            $settings->add(new \admin_setting_configcheckbox('local_o365/sdsprofilesyncenabled', $label, $desc, '0'));

            $label = new lang_string('settings_sds_fieldmap', 'local_o365');
            $desc = new lang_string('settings_sds_fieldmap_details', 'local_o365');
            $default = [
                'givenName/firstname',
                'surName/lastname',
                'pre_Email/email',
                'pre_MailingAddress/address',
                'pre_MailingCity/city',
                'pre_MailingCountry/country',
            ];
            $settings->add(new \local_o365\adminsetting\sdsfieldmap('local_o365/sdsfieldmap', $label, $desc, $default));

            $label = new lang_string('settings_sds_coursecreation', 'local_o365');
            $desc = new lang_string('settings_sds_coursecreation_desc', 'local_o365');
            $settings->add(new admin_setting_heading('local_o365_sds_coursecreation', $label, $desc));

            $label = new \lang_string('settings_sds_coursecreation_enabled', 'local_o365');
            $desc = new \lang_string('settings_sds_coursecreation_enabled_desc', 'local_o365');
            $default = [];
            $choices = [];
            foreach ($schools as $school) {
                $choices[$school['objectId']] = $school['displayName'];
            }
            $settings->add(new admin_setting_configmulticheckbox('local_o365/sdsschools', $label, $desc, $default, $choices));

            $label = new lang_string('settings_sds_enrolment_enabled', 'local_o365');
            $desc = new lang_string('settings_sds_enrolment_enabled_desc', 'local_o365');
            $settings->add(new \admin_setting_configcheckbox('local_o365/sdsenrolmentenabled', $label, $desc, '0'));
        } else {
            $desc = new lang_string('settings_sds_noschools', 'local_o365');
            $settings->add(new admin_setting_heading('local_o365_sds_noschools', '', $desc));
        }
    }
}
