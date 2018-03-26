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
 * Admin setting to control field mappings for users.
 */
class usersynccreationrestriction extends \admin_setting {

    /**
     * Constructor
     * @param string $name unique ascii name, either 'mysetting' for settings that in config,
     *                     or 'myplugin/mysetting' for ones in config_plugins.
     * @param string $visiblename localised name
     * @param string $description localised long description
     * @param mixed $defaultsetting string or array depending on implementation
     */
    public function __construct($name, $visiblename, $description, $defaultsetting) {
        global $DB;

        $this->remotefields = [
            'objectId' => get_string('settings_fieldmap_field_objectId', 'local_o365'),
            'displayName' => get_string('settings_fieldmap_field_displayName', 'local_o365'),
            'givenName' => get_string('settings_fieldmap_field_givenName', 'local_o365'),
            'surname' => get_string('settings_fieldmap_field_surname', 'local_o365'),
            'mail' => get_string('settings_fieldmap_field_mail', 'local_o365'),
            'streetAddress' => get_string('settings_fieldmap_field_streetAddress', 'local_o365'),
            'city' => get_string('settings_fieldmap_field_city', 'local_o365'),
            'postalCode' => get_string('settings_fieldmap_field_postalCode', 'local_o365'),
            'state' => get_string('settings_fieldmap_field_state', 'local_o365'),
            'country' => get_string('settings_fieldmap_field_country', 'local_o365'),
            'jobTitle' => get_string('settings_fieldmap_field_jobTitle', 'local_o365'),
            'department' => get_string('settings_fieldmap_field_department', 'local_o365'),
            'companyName' => get_string('settings_fieldmap_field_companyName', 'local_o365'),
            'telephoneNumber' => get_string('settings_fieldmap_field_telephoneNumber', 'local_o365'),
            'facsimileTelephoneNumber' => get_string('settings_fieldmap_field_facsimileTelephoneNumber', 'local_o365'),
            'mobile' => get_string('settings_fieldmap_field_mobile', 'local_o365'),
            'preferredLanguage' => get_string('settings_fieldmap_field_preferredLanguage', 'local_o365'),
            'o365group' => get_string('settings_usersynccreationrestriction_o365group', 'local_o365'),
        ];

        return parent::__construct($name, $visiblename, $description, $defaultsetting);
    }

    /**
     * Return the setting
     *
     * @return mixed returns config if successful else null
     */
    public function get_setting() {
        return unserialize($this->config_read($this->name));
    }

    /**
     * Write the setting.
     *
     * We do this manually so just pretend here.
     *
     * @param mixed $data Incoming form data.
     * @return string Always empty string representing no issues.
     */
    public function write_setting($data) {
        $newconfig = [];
        if (!isset($data['remotefield']) || !isset($data['value'])) {
            // Broken data, wipe setting.
            $this->config_write($this->name, serialize($newconfig));
            return '';
        }
        $newconfig = ['remotefield' => $data['remotefield'], 'value' => $data['value']];
        $this->config_write($this->name, serialize($newconfig));
        return '';
    }

    /**
     * Return an XHTML string for the setting.
     *
     * @return string Returns an XHTML string
     */
    public function output_html($data, $query = '') {
        global $DB, $OUTPUT;

        if (empty($data) || !is_array($data)) {
            $data = [];
        }
        $remotefield = (isset($data['remotefield']) && isset($this->remotefields[$data['remotefield']])) ? $data['remotefield'] : '';
        $value = (isset($data['value'])) ? $data['value'] : '';

        $html = \html_writer::start_tag('div');

        $html .= \html_writer::select($this->remotefields, $this->get_full_name().'[remotefield]', $remotefield);

        $inputattrs = [
            'type' => 'text',
            'name' => $this->get_full_name().'[value]',
            'value' => $value,
        ];
        $html .= \html_writer::empty_tag('input', $inputattrs);

        $html .= \html_writer::end_tag('div');

        return format_admin_setting($this, $this->visiblename, $html, $this->description, true, '', null, $query);
    }
}
