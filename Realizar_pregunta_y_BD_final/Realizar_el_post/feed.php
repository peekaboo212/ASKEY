<html>
    <head>
    <meta charset="utf-8">  
    </head>
    <?php include 'config.php' ?>
    
    
<body>

    <?php 
    
<<<<<<< Updated upstream
=======
    $columna3 = mysqli_fetch_array($resultado_foto_usuario);
>>>>>>> Stashed changes
    $columna2 = mysqli_fetch_array( $resultado_3);

    while($columna = mysqli_fetch_array( $resultado_2)){

    ?>  
    
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