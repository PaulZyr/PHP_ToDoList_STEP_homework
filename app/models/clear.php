<?php
if (
    isset($_GET['action'])
    && $_GET['action'] === 'clear'
) {
    $dailyTasks = [];
}