<?php

$user= "root";
$pass= "";
$server= "localhost:3307";
$bd= "newbd";




$conexion = mysqli_connect ($server, $user, "") or die("No hay conexion con el servidor");
    

$base= mysqli_select_db(  $conexion, $bd) or die ("no se ha podfifo conectar con a base de datos");

$consulta ="SELECT * FROM post";

$resultado_2 = mysqli_query ($conexion, $consulta) or die ("Sin conexion");


//Consulta para mostrar el nombre del usuario que hizo la pregunta
$consulta_nombre_usuario = "SELECT nombre FROM post p NATURAL JOIN usuarios u";
<<<<<<< Updated upstream

$resultado_3 = mysqli_query ($conexion, $consulta_nombre_usuario) or die ("Sin conexion");



    
=======
$resultado_3 = mysqli_query ($conexion, $consulta_nombre_usuario) or die ("Sin conexion");

//Consulta para mostrar la foto del usuario que hizo la pregunta
$consulta_foto_usuario = "SELECT foto FROM usuarios";
$resultado_foto_usuario = mysqli_query ($conexion, $consulta_foto_usuario) or die ("Sin conexion");

//Consulta para mostrar la foto del usuario de la cuenta
$idUsuario=1;
$consulta_foto_usuario_cuenta = "SELECT foto FROM usuarios WHERE id=1";
$resultado_foto_usuario_cuenta = mysqli_query ($conexion, $consulta_foto_usuario) or die ("Sin conexion");
$columna4 = mysqli_fetch_array($resultado_foto_usuario_cuenta);

>>>>>>> Stashed changes
?>