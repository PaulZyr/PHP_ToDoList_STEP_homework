<?php

$priority = 'no';

if (isset($_POST['btn']) && $_POST['task'] !== '') {
    if (isset($_POST['task'])) {
        $addedTask = $_POST['task'];
        if (isset($_POST['priority'])) {
            $priority = ($_POST['priority'] === 'yes')?'yes':'no';
        }
        $task = [
            'taskText' => $addedTask,
            'createdTime' => date("H:i"),
            'completed' => 'no',
            'priority' => $priority,
        ];
        $dailyTasks[] = $task;
    }
}