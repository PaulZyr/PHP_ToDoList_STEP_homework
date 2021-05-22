<?php
if (
    isset($_GET['action'])
    && $_GET['action'] === 'delete'
    && isset($_GET['id'])
    && isset($dailyTasks)
    && is_array($dailyTasks)
) {
    unset($dailyTasks[$_GET['id']]);
}