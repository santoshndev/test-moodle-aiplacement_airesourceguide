<?php

namespace aiplacement_airesourceguide;

defined('MOODLE_INTERNAL') || die();

class observer {

    public static function course_module_updated(\core\event\course_module_updated $event): void {
        $data = $event->get_data();
        $other = $data['other'];

        if ($other['modulename'] !== 'page') {
            return;
        }

        $cmid = $data['objectid'];

        $cache = \cache::make('aiplacement_airesourceguide', 'references');

        if ($cache->get($cmid) !== false) {
            $cache->delete($cmid);
        }
    }
}
