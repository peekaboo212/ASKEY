<html>
    <head>
    <meta charset="utf-8">
  
    </head>
    <?php include '../templates/header.php'?> 
    <?php include '../Realizar_pregunta_y_BD_final/Realizar_el_post/config.php' 
        ?>

<?php 
    
    if($conexion){
        echo"<h1> conexion exitosa </h1>";
    }



        var_dump()

        //Creamos variables para subir a la db
        $directorio="upload/";
        $archivo = $directorio.basename($_FILES['fichero']['name']);
        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

        //Validart que es una imagen
        $RevisarImagen = getimagesize(($_FILES['fichero']['tmp_name']));

        if($RevisarImagen != false){
            echo $_FILES['archi']['size'];
        }else{
            echo "El documento no es una imagen";
        }

        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)){

            echo "subido exitosamente";
            echo "<img src='".$upload."'";
        }
    

?>

