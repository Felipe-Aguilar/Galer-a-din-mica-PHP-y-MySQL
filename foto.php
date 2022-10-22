<?php

    require('funciones.php');

    $conexion = conexion('yalogics_portafolio' , 'yalogics_usuario', '5879396658747323');

    if (!$conexion) {
        die();
    }

    $id = isset($_GET['id']) ? (int)$_GET['id'] : false;

    if (!$id) {
        header('Location: index.php');
    }

    $statement = $conexion->prepare('SELECT *FROM galeria_dinamica WHERE id = :id');
    $statement->execute(array(':id' => $id));

    $foto = $statement->fetch();

    if (!$foto) {
        header('Location: index.php');
    }


    require('views/foto.view.php');
?>