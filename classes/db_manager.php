<?php
/**
 * db_manager.php
 *
 * This file contains the db_manager class, which encapsulates database
 * interactions for the High Five plugin. It provides methods for creating,
 * reading, updating, and deleting data in the high_five_table.
 */

namespace local_high_five;

defined('MOODLE_INTERNAL') || die();

class db_manager {
    private $db;

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

        return $this->db->insert_record('high_five_table', $record);
    }

    /**
     * Retrieves all records from the high_five_table.
     *
     * @return array Array of records from the high_five_table.
     */
    public function get_all_data() {
        return $this->db->get_records('high_five_table');
    }

    /**
     * Retrieves a record by its id.
     *
     * @param int $id The id of the record to retrieve.
     * @return stdClass|false The record object or false if not found.
     */
    public function get_data_by_id($id) {
        return $this->db->get_record('high_five_table', ['id' => $id]);
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
            return $this->db->update_record('high_five_table', $record);
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
        return $this->db->delete_records('high_five_table', ['id' => $id]);
    }
}
