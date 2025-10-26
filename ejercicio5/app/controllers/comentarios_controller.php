<?php
require_once 'app/models/comentarios_model.php';
require_once 'app/view/comentarios_view.php';

class ComentariosController {
    private $model;
    private $view;

    function __construct() {
        $this->model = new ComentariosModel();
        $this->view = new ComentariosView();
    }

    function showHome() {
        $comentarios = $this->model->getComents();
        $this->view->showComents($comentarios);
    }

    function addComent() {
        if (isset($_POST['comentario']) && !empty($_POST['comentario'])) {
            $comentario = trim($_POST['comentario']);
            $this->model->insertComent($comentario);
            header('Location : home');
        } else {
            $this->view->showError("Ingrese un comentario");
        }
    }
}