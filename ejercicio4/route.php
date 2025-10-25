<?php
session_start();
require_once 'app/middlewares/guard.middleware.php';
require_once 'app/middlewares/session.middleware.php';
// require_once 'templates/tabla.phtml';
// require_once 'templates/form_add.phtml';
require_once 'app/controllers/task_controler.php';

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
    case 'detalle_producto':
        if (isset($params[1])) {
            $controler->showProductById($params[1]);
        } else {
            $controler->showHome();
        }
    break;
    case 'aromatizador':

    break;
    default:
        echo 'error!';
        break;
}
