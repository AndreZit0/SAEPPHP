<?php
require_once '../controllers/FichasController.php';

$controller = new FichasController();

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'toggleStatus':
        $controller->toggleStatus();
        break;
    default:
        $controller->index();
        break;
}
?>