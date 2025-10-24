<?php
// session_start();
require_once './app/controllers/task_controler.php';

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// se instancian los controlers
$controler = new TaskControler();

//          TABLA RUTEO
// home           ->        showHome();
// agregar        ->        addStuff();
// eliminar/:ID   ->      removeStuff();

// parsea para separar acción real de parametros
$params = explode('/', $action);
switch ($params[0]) {
    // HOME
    case 'home':
        $controler->showHome();
    break;
    // PRODUCTOS
    // case 'productos':
        
    // break;
    default:
        echo 'error!';
        break;
}
