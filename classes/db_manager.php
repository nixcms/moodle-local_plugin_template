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

namespace local_high_five;

use moodle_database;
use dml_exception;

/**
 * Class db_manager
 *
 * Provides methods for interacting with the 'local_high_five' table in Moodle.
 *
 * @package     local_high_five
 * @category    local
 * @license     http://opensource.org/licenses/MIT MIT License
 * @copyright   2024 William Entriken <github.com@phor.net>
 */
class db_manager {
    /**
     * @var moodle_database Database connection instance.
     */
    protected $db;

    /**
     * Constructor to initialize the database connection.
     *
     * @throws dml_exception If there is a problem with the database connection.
     */
    public function __construct() {
        global $DB;
        $this->db = $DB;
    }

    /**
     * Inserts a new record into the high_five table.
     *
     * @param string $name The name of the user for the high five.
     * @return int|false The id of the newly inserted record, or false on failure.
     */
    public function insert_data($name) {
        $record = new \stdClass();
        $record->name = $name;

        try {
            return $this->db->insert_record('local_high_five', $record);
        } catch (dml_exception $e) {
            return false;
        }
    }

    /**
     * Retrieves all records from the high_five table.
     *
     * @return array|false Array of records or false on failure.
     */
    public function get_all_data() {
        try {
            return $this->db->get_records('local_high_five');
        } catch (dml_exception $e) {
            return false;
        }
    }

    /**
     * Retrieves a record by its id.
     *
     * @param int $id The id of the record to retrieve.
     * @return stdClass|false The record object or false if not found.
     */
    public function get_data_by_id($id) {
        try {
            return $this->db->get_record('local_high_five', ['id' => $id]);
        } catch (dml_exception $e) {
            return false;
        }
    }

    /**
     * Updates an existing record in the high_five table.
     *
     * @param int $id The id of the record to update.
     * @param string $name The new name value for the record.
     * @return bool True on success, false on failure.
     */
    public function update_data($id, $name) {
        $record = $this->get_data_by_id($id);
        if ($record) {
            $record->name = $name;
            return $this->db->update_record('local_high_five', $record);
        }
        return false;
    }

    /**
     * Deletes a record from the high_five table.
     *
     * @param int $id The id of the record to delete.
     * @return bool True on success, false on failure.
     */
    public function delete_data($id) {
        try {
            return $this->db->delete_records('local_high_five', ['id' => $id]);
        } catch (dml_exception $e) {
            return false;
        }
    }
}