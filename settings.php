<?php
// This file is part of the High Five plugin for Moodle
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
 * High Five plugin main page display
 *
 * @package     local_high_five
 * @license     http://opensource.org/licenses/MIT MIT License
 * @copyright   2024 William Entriken
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) { // Ensure the user has site admin permissions.
    $settings = new admin_settingpage('local_high_five', get_string('pluginname', 'local_high_five'));

    // Example setting: Enable/Disable feature.
    $settings->add(new admin_setting_configcheckbox(
        'local_high_five/enable_feature', // Setting name.
        get_string('enable_feature', 'local_high_five'), // Title of the setting.
        get_string('enable_feature_desc', 'local_high_five'), // Description of the setting.
        0 // Default is disabled (set to 1 to enable by default).
    ));

    $ADMIN->add('localplugins', $settings);
}
