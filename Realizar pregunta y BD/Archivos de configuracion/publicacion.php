<?php


include 'config.php';
$id_post ="";  // Este siempre se va a dejar vacio por que se rrelena cuando escriben una publicacion

$id_Usuario= "1";

$id_Materia= "1";         //estos campos se van a modificar con el login

$id_Estado ="1";

$BanderaRoja= "";

$fechareg = date("d/m/y");  //Con esto se pone la fecha de publicacion



if(isset($_POST['publicar'])){
    
    if( strlen($_POST['publicacion']>=4))
    {
        $texto =trim ($_POST['publicacion']); //texto que se va apublicar
        
        $consulta =" INSERT INTO `post`(`Id_Post`, `Texto`, `Id_Usuario`, `Id_Materia`, `Id_Estado`, `Fecha_Post`, `Bandera_Roja`) VALUES ('','$texto','$id_Usuario','$id_Materia','$id_Estado','$fechareg','') ";
        
        $resultado = mysqli_query($conexion,$consulta);
        
        
    }
}


