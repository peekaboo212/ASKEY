<html>
    <head>
    <meta charset="utf-8">  
    </head>
    <?php include 'config.php' ?>
    
    
<body>

    <?php 
<<<<<<< Updated upstream
    
<<<<<<< Updated upstream
=======
    $columna3 = mysqli_fetch_array($resultado_foto_usuario);
>>>>>>> Stashed changes
=======

    //Consulta para mostrar el nombre del usuario que hizo la pregunta
    $consulta_nombre_usuario = "SELECT nombre FROM post p NATURAL JOIN usuarios u";
    $resultado_3 = mysqli_query ($conexion, $consulta_nombre_usuario) or die ("Sin conexion");

    //Consulta para mostrar la foto del usuario que hizo la pregunta
    $consulta_foto_usuario = "SELECT foto FROM usuarios";
    $resultado_foto_usuario = mysqli_query ($conexion, $consulta_foto_usuario) or die ("Sin conexion");
    
    $columna3 = mysqli_fetch_array($resultado_foto_usuario);
>>>>>>> Stashed changes
    $columna2 = mysqli_fetch_array( $resultado_3);

    while($columna = mysqli_fetch_array( $resultado_2)){

    ?>  
    
<<<<<<< Updated upstream
    <div class="card mt-2 mb-2">
                <!-- Elementos del encabezado -->
                <div class="card-header">
                    <div class="row justify-content-between">
<<<<<<< Updated upstream
                        <div class="col-3">
=======
                        <div class="col-3 text-start">
                            <img src="subir_archivo/<?php echo $columna3 ['foto'] ?>" class="rounded-circle" height="25" width="25"  style="object-fit: cover;">
>>>>>>> Stashed changes
=======
    <div class="card mt-2 mb-2" data-aos="zoom-in-up" data-aos-duration="1000">
                <!-- Elementos del encabezado -->
                <div class="card-header">
                    <div class="row justify-content-between">
                        <div class="col-3 text-start">
                            <img src="subir_archivo/<?php echo $columna3 ['foto'] ?>" class="rounded-circle" height="25" width="25"  style="object-fit: cover;">
>>>>>>> Stashed changes
                            <?php echo $columna2 ['nombre'] ?>
                        </div>
                        <div class="col-2 text-end">
                            <?php echo $columna ['Fecha_Post'] ?>
                        </div>
                    </div>
                </div>
                <!-- /Elementos del encabezado -->
                
                <!-- Realizar publicacion -->
                <div class="card-body">
                    <?php echo $columna ['Texto'] ?><hr>    
                    <div class="d-flex justify-content-end">
                        <div class="">
                        </div>
                    </div>           
                </div>
                <!-- /Realizar publicacion -->
            </div>


 
                
    <?php  
        }
        ?>

    

    
    
    
    
</body>





</html>