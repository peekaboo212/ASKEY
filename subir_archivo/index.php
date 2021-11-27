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
?>
<<<<<<< Updated upstream
        <form action="upload.php" method="POST" class="container">
            <div>
                <label for="formFileLg" class="form-label">Suba su archivo</label>
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="fichero">
            </div>
            <div class="">
                <input type="hidden" name="oculto" value="1">
                <input type="submit" class="btn btn-primary" value="Subir">
            </div>
=======
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <h2>Subir archivo</h2>
            <input type="file" name="file">
            <input type="submit" value="Subir archivo">
>>>>>>> Stashed changes
        </form>
        <a href="upload.php"> View post </a>
    </body>
</html>