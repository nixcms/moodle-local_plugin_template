<?php

namespace local_high_five\task;

defined('MOODLE_INTERNAL') || die();

class process_high_fives extends \core\task\scheduled_task {

    /**
     * Return the task name.
     */
    public function get_name() {
        return get_string('processhighfivesname', 'local_high_five');
    }

    /**
     * Execute the task.
     */
    public function execute() {
        // Add your processing logic here.
        mtrace('Processing High Fives...');
    }
}
