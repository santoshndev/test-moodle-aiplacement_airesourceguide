<?php

defined('MOODLE_INTERNAL') || die();

$observers = [
    [
        'eventname'  => '\core\event\course_module_updated',
        'callback'   => '\aiplacement_airesourceguide\observer::course_module_updated',
    ],
];
