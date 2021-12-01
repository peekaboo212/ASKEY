<html>
    <head>
    <meta charset="utf-8">
  
    </head>
    <?php include '../templates/header.php'?> 
    <?php include '../Realizar_pregunta_y_BD_final/Realizar_el_post/config.php' 
        ?>

        <!--Seccion para subir foto del usuario-->
        <form action="upload_foto.php" method="POST" enctype="multipart/form-data">
            <h2>Subir Foto</h2>
            <input type="file" name="file">
            <input type="submit" value="Subir archivo">
        </form>
        <!-- /Seccion para subir foto del usuario-->

        <!-- Seccion para subir archivos a un post-->
        <form action="upload_archivo_post.php" method="POST" enctype="multipart/form-data">
            <h2>Subir Archivo para post</h2>
            <input type="file" name="file">
            <input type="submit" value="Subir archivo">
        </form>
        <!-- /Seccion para subir archivos a un post-->

        <!-- Seccion para subir archivos de un comentario-->
        <form action="upload_archivo_comentario.php" method="POST" enctype="multipart/form-data">
            <h2>Subir Archivo para comentario</h2>
            <input type="file" name="file">
            <input type="submit" value="Subir archivo">
        </form>
        <!-- /Seccion para subir archivos de un comentario-->

    </body>
</html>