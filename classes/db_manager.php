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
// You should have received a copy of the GNU General Public License along with Moodle; if not, see <https://www.gnu.org/licenses/>.

namespace local_high_five;

use moodle_database;
use dml_exception;  // Import dml_exception to handle potential exceptions

/**
 * Class db_manager
 *
 * Manages database interactions for the High Five plugin.
 */
class db_manager {
    /**
     * @var moodle_database Database connection instance.
     */
    protected $db;

    /**
     * db_manager constructor.
     *
     * Initializes the database connection.
     *
     * @throws dml_exception If the database connection cannot be established.
     */
    public function __construct() {
        global $DB;
        $this->db = $DB;
    }

    /**
     * Inserts a new record into the high_five_table.
     *
     * @param string $name The name of the user for the high five.
     * @return int The id of the newly inserted record.
     */
    public function insert_data($name) {
        $record = new \stdClass();
        $record->name = $name;

        return $this->db->insert_record('local_high_five', $record);
    }

    /**
     * Retrieves all records from the high_five_table.
     *
     * @return array Array of records from the high_five_table.
     */
    public function get_all_data() {
        return $this->db->get_records('local_high_five');
    }

    /**
     * Retrieves a record by its id.
     *
     * @param int $id The id of the record to retrieve.
     * @return stdClass|false The record object or false if not found.
     */
    public function get_data_by_id($id) {
        return $this->db->get_record('local_high_five', ['id' => $id]);
    }

    /**
     * Updates an existing record in the high_five_table.
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
     * Deletes a record from the high_five_table.
     *
     * @param int $id The id of the record to delete.
     * @return bool True on success, false on failure.
     */
    public function delete_data($id) {
        return $this->db->delete_records('local_high_five', ['id' => $id]);
    }
}
