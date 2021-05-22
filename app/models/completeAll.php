<?php

if (
    isset($_GET['action'])
    && $_GET['action'] === 'completeAll'
    && isset($dailyTasks)
    && is_array($dailyTasks)
) {
    foreach ($dailyTasks as $key => &$task) {
        $task['completed'] = 'yes';
    }
}