<?php

 include("../../../../PHP/conexion.php");

 $nombre = $_POST ['nombre'];
 $apellido = $_POST ['apellido'];
 $dni = $_POST ['dni'];
 $mail = $_POST ['mail'];
 $telefono = $_POST ['telefono'];
 mysqli_query($conexion,"INSERT INTO pacientes (nombre,apellido,dni,tel,mail) VALUES ('$nombre','$apellido',$dni,$telefono,'$mail')");
?>


