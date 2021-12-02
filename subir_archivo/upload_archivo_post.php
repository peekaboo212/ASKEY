<html>
    <head>
    <meta charset="utf-8">
  
    </head>
    <?php include '../templates/header.php'?> 
    <?php include '../Realizar_pregunta_y_BD_final/Realizar_el_post/config.php'?>

<?php 
    if($conexion){
        echo"<h1> conexion exitosa </h1>";
    }

    //var_dump($_FILES["file"]["name"]); //El array global $_FILES contendrá toda la información de los los ficheros subidos. 
    //"name", "error", "type","size","tmp_name" (El nombre temporal del fichero en el cual se almacena el fichero subido en el servidor.)

    //Esta variable guardará el resultado de la consulta pra obtener el id del usuario
    $idPost=1;


    //la carpeta donde quiero guardar el archivo                                        
    $directorio="archivos_subidos/archivos_post/".$idPost."/";

    if (!is_dir($directorio)) {
        echo "no hay";
        mkdir($directorio,0777);
    }else{
        echo "si hay";
        /*Sección para leer los documentos que hay en una carpeta y borrarlos*/
        //Es posible colocarlo en una condicional o un archivo aparte
        //---------------------------------------------------------------//
        if($dir = opendir($directorio)){//abre directorio
            while($archivoGuardado=readdir($dir)){//lee los archivos
                if($archivoGuardado != '.' && $archivoGuardado != '..'){//omitir . y ..
                    unlink ($directorio.$archivoGuardado);//borra archivos
                }
            }
        }
        //-----------------------------------------------------------------//
    }
    
    //rmdir('ejemplos');


    // Direccion donde voy a guardar el archivo
    $archivo= $directorio.basename($_FILES['file']['name']);
    //Obtengo la extensión del archivo
    $tipoArchivo = strtolower(pathinfo($archivo,PATHINFO_EXTENSION)); //pathinfo — Devuelve información acerca de la ruta de un fichero
    
    //Validando el tamaño del archivo
    $size = $_FILES['file']['size'];
    if($size>419430400){
        echo $size;
        echo "El archivo debe ser menor a 50MB";
    }else{
        if(move_uploaded_file($_FILES['file']['tmp_name'], $archivo)){//move_uploaded_file — Mueve un archivo subido a una nueva ubicación
            echo "El archivo se subió correctamente";
            $rutaFinalArchivo = $directorio.$_FILES['file']['name'];
            echo $rutaFinalArchivo;

            $consulta_insertar_archivo_post ="UPDATE `post` SET `archivo` = '$rutaFinalArchivo' WHERE `id_Post`='$idPost'";
    
            $resultado_insertar_archivo_post = mysqli_query($conexion,$consulta_insertar_archivo_post);


        }else{
            echo "Error al subir al archivo";
        }
    }
    
?>