<?php

$user= "root";
$pass= "";
$server= "localhost";
$bd= "askey";




$conexion = mysqli_connect ($server, $user, "") or die("No hay conexion con el servidor");
    

$base= mysqli_select_db(  $conexion, $bd) or die ("no se ha podfifo conectar con a base de datos");

$consulta ="SELECT * FROM post";

//$resultado = mysqli_query ($conexion, $consulta) or die ("Sin conexion");







    
?>