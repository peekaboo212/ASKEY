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

$resultado_3 = mysqli_query ($conexion, $consulta_nombre_usuario) or die ("Sin conexion");



    
?>