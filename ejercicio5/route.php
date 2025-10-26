<?php
// session_start();
// require_once 'app/middlewares/guard.middleware.php';
// require_once 'app/middlewares/session.middleware.php';
// require_once 'templates/tabla.phtml';
// require_once 'templates/form_add.phtml';
require_once 'app/controllers/comentarios_controller.php';

$action = 'home'; // acción por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// se instancian los controlers
$controler = new ComentariosController();

//          TABLA RUTEO
// home                ->        showHome();
// lista_comentarios    ->       listComents();
// nuevo_comentario     ->        addComent();

// parsea para separar acción real de parametros
$params = explode('/', $action);
switch ($params[0]) {
    // HOME
    case 'home':
        $controler->showHome();
        break;
    // COMENTARIOS
    case 'agregar':
        $controler->addComent();
        break;

    default:
        echo 'error!';
        break;
}
