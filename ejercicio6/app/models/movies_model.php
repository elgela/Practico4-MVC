<?php

function conection() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db_movies;charset=utf8', 'root', '');
        return $db;
    }
class moviesModel {

    function getMovies() {
        // obtiene el genero enviado por GET 
        $genre = $_GET['genre'];

        // obtiene la lista de peliculas de la DB según género
        $db = conection();
        $query = $db->prepare('SELECT * FROM movies WHERE genre = ?');
        $query->execute([$genre]);
        $movies = $query->fetchAll(PDO::FETCH_OBJ);

        return $movies;
    }
}