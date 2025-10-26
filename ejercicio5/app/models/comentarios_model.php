<?php

class ComentariosModel {

    function conection() {
        $db = new PDO('mysql:host=localhost;dbname=comentarios;charset=utf8', 'root', '');
        return $db;
    }
    
    function getComents() {
        // 1. abro conexion a db
        $db = $this->conection();

        // 2. envio consulta y obtengo resultados
        $query = $db->prepare('SELECT * FROM tabla_comentarios');
        $query->execute();

        // 3. obtengo los datos que arroja la query
        $tabla_comentarios = $query->fetchAll(PDO::FETCH_OBJ);

        return $tabla_comentarios;
    }

    function insertComent($comentario) {
        // conexion a DB
        $db = $this->conection();

        // consulta y resultados
        $query = $db->prepare("INSERT INTO tabla_comentarios(comentario) VALUES (?)");
        $query->execute([$comentario]);
    }

}