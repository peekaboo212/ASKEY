<?php

if(empty($_POST["oculto"]) || 
    empty($_POST["nombre"]) ||
    empty($_POST["descripcion"]) ||
    empty($_POST["price"]))
    {
        header('Location: askey.php?mensaje=nocompleted');
        exit();
    }
    include_once 'model/conexion.php';
    $nombre = $_POST["nombre"];
    $descrip = $_POST["descripcion"];
    $precio = $_POST["price"];
    $sentencia = $bd->prepare("INSERT INTO articulos (nombreArticulo, 
    descripcionArticulo, precioArticulo) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$descrip, $precio]);

    if ($resultado === true ){
        header('Location: index.php?mensaje=completo');
    }
    else{
        header('Location: index.php?mensaje=error');}
?>