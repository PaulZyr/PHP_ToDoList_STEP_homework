<?php
$isUncomleted = false;
$isTasks = false;
if (isset($dailyTasks) && is_array($dailyTasks)) {
    if (count($dailyTasks) > 0) {
        $isTasks = true;
    }
    foreach ($dailyTasks as $task) {
        if($task['completed'] === 'no') {
            $isUncomleted = true;
        }
    }
}
echo '<div class="d-flex justify-content-end">';
echo '<span>';
if ($isUncomleted) {
    echo '<a href="index.php?action=completeAll"><button type="button" class="btn btn-outline-success">Complete ALL</button></a>';
} else {
    echo '<a href="index.php?action=completeAll"><button type="button" class="btn btn-outline-secondary" disabled>Complete ALL</button></a>';
}
echo '</span>';

echo '<span>';
if ($isTasks) {
    echo '<a href="index.php?action=clear"><button type="button" class="btn btn-outline-danger">Clear All</button></a>';
} else {
    echo '<a href="index.php?action=clear"><button type="button" class="btn btn-outline-secondary" disabled>Clear All</button></a>';
}

echo '</span>';
echo '</div>';