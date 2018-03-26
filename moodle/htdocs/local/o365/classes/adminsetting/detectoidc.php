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

namespace local_o365\adminsetting;

global $CFG;
require_once($CFG->dirroot.'/lib/adminlib.php');

/**
 * Admin setting to detect whether oauth credentials are present in openid connect.
 */
class detectoidc extends \admin_setting {

    /**
     * Constructor.
     *
     * @param string $name Name of the setting.
     * @param string $visiblename Visible name of the setting.
     * @param string $description Description of the setting.
     * @param array $defaultsetting Default value.
     * @param array $choices Array of icon choices.
     */
    public function __construct($name, $heading, $description) {
        $this->nosave = true;
        parent::__construct($name, $heading, $description, '');
    }

    /**
     * Always returns true because we have no real setting.
     *
     * @return bool Always returns true
     */
    public function get_setting() {
        return true;
    }

    /**
     * Always returns true because we have no real setting.
     *
     * @return bool Always returns true
     */
    public function get_defaultsetting() {
        return true;
    }

    /**
     * Never write settings.
     *
     * @return string Always returns an empty string.
     */
    public function write_setting($data) {
        return '';
    }

    /**
     * Determine whether this setup step has been completed.
     *
     * @return bool True if setup step has been completed, false otherwise.
     */
    public static function setup_step_complete() {
        $oidcconfig = get_config('auth_oidc');
        $clientcredspresent = (!empty($oidcconfig->clientid) && !empty($oidcconfig->clientsecret)) ? true : false;
        $endpointspresent = (!empty($oidcconfig->authendpoint) && !empty($oidcconfig->tokenendpoint)) ? true : false;
        return ($clientcredspresent === true && $endpointspresent === true) ? true : false;
    }

    /**
     * Return an XHTML string for the setting
     * @return string Returns an XHTML string
     */
    public function output_html($data, $query='') {
        global $OUTPUT;
        $settingspage = new \moodle_url('/admin/settings.php?section=authsettingoidc');
        if (static::setup_step_complete() === true) {
            $icon = $OUTPUT->pix_icon('t/check', 'success', 'moodle');
            $message = \html_writer::tag('span', get_string('settings_detectoidc_credsvalid', 'local_o365'));
            $linkstr = get_string('settings_detectoidc_credsvalid_link', 'local_o365');
            $link = \html_writer::link($settingspage, $linkstr, ['style' => 'margin-left: 1rem']);
            $html = \html_writer::tag('div', $icon.$message.$link, ['class' => 'alert-success alert local_o365_statusmessage']);
        } else {
            $icon = $OUTPUT->pix_icon('t/delete', 'success', 'moodle');
            $message = \html_writer::tag('span', get_string('settings_detectoidc_credsinvalid', 'local_o365'));
            $linkstr = get_string('settings_detectoidc_credsinvalid_link', 'local_o365');
            $link = \html_writer::link($settingspage, $linkstr, ['style' => 'margin-left: 1rem']);
            $html = \html_writer::tag('div', $icon.$message.$link, ['class' => 'alert-error alert local_o365_statusmessage']);
        }
        return format_admin_setting($this, $this->visiblename, $html, $this->description, true, '', null, $query);
    }
}
