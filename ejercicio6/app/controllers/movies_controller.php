<?php
require_once 'app/models/movies_model.php';
require_once 'app/views/movies_views.php';

class moviesController {

    private $model;
    private $view;

    function __construct() {
        $this->model = new moviesModel();
        $this->view = new moviesViews();
    }

    function showHome() {
        $peliculas = $this->model->getMovies();
        $this->view->showMovies();
    }

}