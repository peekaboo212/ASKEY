<?php

$user= "root";
$pass= "";
$server= "localhost:3307";
$bd= "newbd";




$conexion = mysqli_connect ($server, $user, "") or die("No hay conexion con el servidor");
    

$base= mysqli_select_db(  $conexion, $bd) or die ("no se ha podido conectar con a base de datos");

$consulta ="SELECT * FROM post";

$resultado_2 = mysqli_query ($conexion, $consulta) or die ("Sin conexion");

//Consulta para mostrar la foto del usuario de la cuenta
$idUsuario=1;
$consulta_foto_usuario_cuenta = "SELECT foto FROM usuarios WHERE id=1";
$resultado_foto_usuario_cuenta = mysqli_query ($conexion, $consulta_foto_usuario_cuenta) or die ("Sin conexion");
$columna4 = mysqli_fetch_array($resultado_foto_usuario_cuenta);

//Consultas obtener datos del usuario de la cuenta
$consulta_datos_usuario_cuenta = "SELECT * FROM usuarios WHERE id=$idUsuario";
$resultado_datos_usuario_cuenta = mysqli_query ($conexion, $consulta_datos_usuario_cuenta) or die ("Sin conexion");
$datos_usuario_cuenta = mysqli_fetch_array($resultado_datos_usuario_cuenta);
?>