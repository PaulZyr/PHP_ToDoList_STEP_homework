<?php

if(isset($dailyTasks)) {
    setcookie('daily', json_encode($dailyTasks, JSON_UNESCAPED_SLASHES), time() + COOKIES_LIFE_IN_HOURS * 60 * 60);
}
