<?php

ini_set('display_error', true);
ini_set('display_startup_error', true);
ini_set('log_errors', true);
ini_set('error_log', __DIR__.'/logs/errors.log');

error_reporting(E_ALL);

define('MODELS_DIR', __DIR__.'/models/');
define('VIEWS_DIR', __DIR__.'/views/');
define('CONTROLLERS_DIR', __DIR__.'/controllers/');

define('COOKIES_LIFE_IN_HOURS', 12);

require_once __DIR__.'/routes.php';