<?php

function conexion($tabla,$usuario,$pass){
    try {
        $conexion = new PDO("mysql:host=162.241.61.205;dbname=$tabla",$usuario,$pass);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

?>