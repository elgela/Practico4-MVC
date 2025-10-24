<?php

function conection() {
    return new PDO('mysql:host=localhost;dbname=productos_limpieza;charset=utf8', 'root', '');
}

function getStuff() {
    // 1. abro conexion a la DB
    $db = conection();

    // 2. envio consulta y obtengo resultados
    $query = $db->prepare("SELECT * FROM productos");
    $query->execute();

    // 3. obtengo los datos que arroja la query
    $materias = $query->fetchAll(PDO::FETCH_OBJ);
    return $materias;
}
$materias = getStuff();

// inserta en la base de datos
function insertStuff($nombre_materia, $profesor, $nombre_carrera, $anios) {
    // 1. abro conexion a la DB
    $db = conection();

    // 2. envio consulta y obtengo resultados
    $query = $db->prepare("INSERT INTO materia(nombre, profesor, carrera, anios) VALUES (?,?,?,?)");
    $query->execute([$nombre_materia, $profesor, $nombre_carrera, $anios]);

}

function getStuffById($id) {
    $db = conection();
    $query = $db->prepare("SELECT id FROM materia WHERE materia.id = ?");
    $query->execute([$id]);
    return $id;
}

// actualizar
function conectStuffById($id) {
    // 1. abro conexion a la DB
    $db = conection();

    // 2. envio consulta y obtengo resultados
    $query = $db->prepare("UPDATE id FROM materia WHERE materia.id = ?");
    $query->execute([$id]);
    return $id;
}

// eliminar
function deleteStuff($id) {
    // 1. abro conexion a la DB
    $db = conection();

    // 2. envio consulta y obtengo resultados
    $query = $db->prepare("DELETE FROM materia WHERE materia.id = ?");
    $query->execute([$id]);

}

// function searchStuff() {
//     $db = conection();
//     $query = $db->prepare("SELECT * FROM materia WHERE anios")
// }
