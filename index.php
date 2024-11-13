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
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see <https://www.gnu.org/licenses/>.

/**
 * High Five plugin main page display
 *
 * @package     local_high_five
 * @category    local
 * @license     http://opensource.org/licenses/MIT MIT License
 * @copyright   2024 William Entriken
 */

require_once('../../config.php');
require_login();

// Page setup.
$pageurl = new moodle_url('/local/high_five/index.php');
$PAGE->set_url($pageurl);
$PAGE->set_context(context_system::instance());
$PAGE->set_title(get_string('pluginname', 'local_high_five'));

// Display content.
$sender = 'Will'; // For localization, could be sourced from user data in a real scenario.
$highfiveheading = get_string('latesthighfive', 'local_high_five', $sender);
$PAGE->set_heading($highfiveheading);

echo $OUTPUT->header();
echo $OUTPUT->footer();
