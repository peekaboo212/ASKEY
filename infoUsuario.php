<?php 
    include 'templates/header.php';
    include 'Realizar_pregunta_y_BD_final/Realizar_el_post/config.php';
    
    //Resultados consultas
    //$datos_usuario_cuenta = mysqli_fetch_array($resultado_datos_usuario_cuenta);

    //----------------------------------------------
    // Arreglas la base de datos para hacer la consulta del tipo de usuario
    //$consulta_cargo_usuario_cuenta = "SELECT "

?> 

<div class="container mt-4 position-relative" ><!--data-aos-duration="1000"-->
    <div class="row justify-content-between align-items-center">
        <!-- Sección para mostrar foto del usuario -->
            <div class="col-12 col-md-4 text-end mb-5">
                <?php include 'Realizar_pregunta_y_BD_final/Realizar_el_post/config.php'?>
                <img src="subir_archivo/<?php echo $columna4['foto']; ?>" class="rounded-circle" width="250" height="250" style="object-fit: cover;">
            </div>
        <!-- /Sección para mostrar foto del usuario -->

        <!-- Sección principales usuario -->
            <div class="col-7 ">
                <h1 style="font-size: 60px !important;"><?php echo $datos_usuario_cuenta['nombre'];?></h1>
                <br>
                <h2>Ingeniería en software</h2>
            </div>
        <!-- /Sección principales usuario -->
    </div>

    <div class="row ">
        <!-- Sección info cuenta-->
            <div class="col-5 offset-2">
                <h4><?php echo $datos_usuario_cuenta['email'];?></h4>
                <br>
                <a href="">Cambiar contraseña</a>
                <a href=""><button type="button" class="btn btn-secondary">Editar</button></a>
                <a href=""><button type="button" class="btn btn-danger">Cerrar sesión</button></a>
            </div>
        <!-- /Sección info cuenta-->
    </div>
</div>

<?php include 'templates/footer.php'?> 