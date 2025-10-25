<?php
require_once 'app/models/task.model.php';
require_once 'app/views/task.view.php';

class TaskControler {
    private $model;
    private $view;
    
    function __construct() {
        $this->model = new taskModel();
        $this->view = new taskView();
    }

    function showHome() {
        $productos = $this->model->getProducts();
        $this->view->showProducts($productos);
    }

    function showProductById($id) {
        $productos = $this->model->getProducts();
        $this->view->showDetails($productos, $id);
    }

}