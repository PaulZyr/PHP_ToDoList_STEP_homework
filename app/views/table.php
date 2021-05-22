<?php

if (isset($dailyTasks)) {
    echo '<ol>';
    foreach ($dailyTasks as $id => $task) {
        echo '<li class="border-secondary border-1 border-top p-1 mt-2"><span class="fs-4 ';

        if ($task['priority'] === 'yes') {
            echo ' priority';
        } else {
            echo ' non-priority';
        }
        if ($task['completed'] === 'yes') {
            echo ' completed';
        }

        echo '"><b>'.$task['taskText'].'</b></span><br>';
        echo '<span class="fs-6">Creation time: '.$task['createdTime'].'<br></span>';

        echo '<div class="d-flex justify-content-end">';
        if ($task['completed'] === 'yes') {
            echo '<button type="button" class="btn btn-outline-secondary" disabled>Complete</button>';
        } else {
            echo '<a href="index.php?action=complete&id='.$id.'"><button type="button" class="btn btn-outline-success">Complete</button></a>';
        }
        echo '<a href="index.php?action=delete&id='.$id.'"><button type="button" class="btn btn-outline-danger">Delete</button></a>';
        echo '</div>';

        echo '</li>';
    }
    echo '</ol>';
}

// li
//  span
//  span
//  button done + button delete