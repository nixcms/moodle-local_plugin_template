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

defined('MOODLE_INTERNAL') || die();

/**
 * Installation code for the local_high_five plugin.
 *
 * This function is executed during the installation of the plugin, setting up
 * the initial database structure for local_high_five if it does not already exist.
 *
 * @package     local_high_five
 * @category    local
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright   2024 William Entriken
 */

/**
 * Sets up the initial database structure for the local_high_five plugin.
 *
 * Checks if the `local_high_five` table exists in the database; if not, creates it.
 *
 * @return void
 * @throws ddl_exception If there is an issue creating the table.
 */
function xmldb_local_high_five_install() {
    global $DB;

    // Define the table
    $table = new xmldb_table('local_high_five');

    // Create table if it doesn't exist
    if (!$DB->get_manager()->table_exists($table)) {
        $DB->get_manager()->create_table($table);
    }
}
