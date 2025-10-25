<?php
// require_once 'db.php';
// require_once 'templates/form_add.phtml';
// require_once 'templates/tabla.phtml';


// function showHome() {
//     showStuff();
// }

// function showStuff() {
//     require_once 'templates/header.phtml';
//     $materias = getStuff();
//     require_once 'templates/footer.phtml';
// }

// function addStuff() {
//     // TODO: validacion de datos
//     if (isset($_POST['nombre'], $_POST['profesor'], $_POST['carrera'], $_POST['anios'], $_POST['id']) && !empty($_POST['nombre'])) {
//         // obtengo los datos del usuario
//         $id = $_POST['id'];
//         $nombre_materia = $_POST['nombre'];
//         $profesor = $_POST['profesor'];
//         $nombre_carrera = $_POST['carrera'];
//         $anios = $_POST['anios'];
//         // inserto en la DB
//         insertStuff($id, $nombre_materia, $profesor, $nombre_carrera, $anios);
//         header('Location: ' . BASE_URL);
//     } else {
//         echo 'Error!';
//     }
// }

// function renewStuff($id) {
//     conectStuffById($id);
//     showEditForm($id);
// }

// function showEditForm($id) {
//     $data = getStuffById($id);
//     require_once 'templates/form_update.phtml';
// }

// function removeStuff($id) {
//     deleteStuff($id);
//     header('Location: ' . BASE_URL);
// }
