<?php
    $nombreServidor ="localhost";
    $db = "base_rojas";
    $usuario = "root";
    $contraseña = "";

    try {
        $conexion = new PDO("mysql:host=$nombreServidor;dbname=$db", $usuario,$contraseña);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "conexion exitosa";
        return $conexion;

    }catch (PDOException $e ){
        echo "Error en la conexion: " .$e->getMessage();
        echo "Linea: ".$e->getLine();
    }
?>