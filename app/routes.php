<?php

require_once CONTROLLERS_DIR.'HeaderController.php';

$action = '';

if (isset($_GET['action'])) {
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}

require_once CONTROLLERS_DIR.'GetTasksFromCookiesController.php';

switch ($action) {
    case 'add':
        require_once CONTROLLERS_DIR.'AddController.php';
        break;
    case 'delete':
        require_once CONTROLLERS_DIR.'DeleteController.php';
        break;
    case 'clear':
        require_once CONTROLLERS_DIR.'ClearController.php';
        break;
    case 'complete':
        require_once CONTROLLERS_DIR.'CompleteController.php';
        break;
    case 'completeAll':
        require_once CONTROLLERS_DIR.'CompleteAllController.php';
        break;
}

require_once CONTROLLERS_DIR.'SetTasksToCookiesController.php';

require_once CONTROLLERS_DIR.'MasterController.php';
require_once CONTROLLERS_DIR.'FooterController.php';
