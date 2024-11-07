<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin upgrade steps are defined here.
 *
 * @package     local_high_five
 * @copyright   2024 William Entriken <your@mail.com>
 * @license     http://opensource.org/licenses/MIT MIT License
 */

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__.'/upgradelib.php');

/**
 * Execute local_high_five upgrade from the given old version.
 *
 * @param int $oldversion
 * @return bool
 */
function xmldb_local_high_five_upgrade($oldversion) {
    global $DB;

    $dbman = $DB->get_manager();

    // Check if the plugin is being upgraded to a newer version.
    if ($oldversion < 2024100900) { // Old version check
        // Example: Add a table or perform a schema update
        if (!$dbman->table_exists('local_high_five')) {
            $table = new xmldb_table('local_high_five');
            // Define fields and indexes for the table here
            $dbman->create_table($table);
        }
        upgrade_plugin_savepoint(true, 2024100900, 'local', 'high_five');
    }

    // Add additional checks for future versions as needed.
    return true;
}
