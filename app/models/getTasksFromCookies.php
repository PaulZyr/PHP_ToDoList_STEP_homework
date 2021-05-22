<?php

if (isset($_COOKIE['daily'])) {
    $dailyTasks = json_decode($_COOKIE['daily'], true);
}