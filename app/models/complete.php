<?php

if (
    isset($_GET['action'])
    && $_GET['action'] === 'complete'
    && isset($_GET['id'])
    && isset($dailyTasks)
    && is_array($dailyTasks)
    && $_GET['id'] >= 0
    && $_GET['id'] < count($dailyTasks)
) {
    $dailyTasks[$_GET['id']]['completed'] = 'yes';
}