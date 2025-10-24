<?php
include_once 'models/task.model.php';
include_once 'views/task.view.php';

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


}