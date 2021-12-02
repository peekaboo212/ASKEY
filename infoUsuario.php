<?php 
    include 'templates/header.php';
    include 'Realizar_pregunta_y_BD_final/Realizar_el_post/config.php';
    
    //Resultados consultas
    //$datos_usuario_cuenta = mysqli_fetch_array($resultado_datos_usuario_cuenta);

    //----------------------------------------------
    // Arreglas la base de datos para hacer la consulta del tipo de usuario
    //$consulta_cargo_usuario_cuenta = "SELECT "

?> 

<div class="container mt-4" ><!--data-aos-duration="1000"-->
    <div class="row justify-content-evenly align-items-center ">
        <!-- Sección espacio -->
        <div class="container d-none d-lg-block" style="height:100px;"></div>
        <!-- /Sección espacio -->

        <!-- Sección para mostrar foto del usuario -->
            <div class="col-12 col-md-4 md-text-end text-center">
                <?php include 'Realizar_pregunta_y_BD_final/Realizar_el_post/config.php'?>
                <img src="subir_archivo/<?php echo $columna4['foto']; ?>" class="rounded-circle" width="300" height="300" style="object-fit: cover;">
            </div>
        <!-- /Sección para mostrar foto del usuario -->

        <!-- Sección principales usuario -->
            <div class="col-12 col-lg-6 text-center text-lg-start">
                <h1 style="font-size: 60px !important;"><?php echo $datos_usuario_cuenta['nombre'];?></h1>
                <br><br>
                <h2>Ingeniería en software</h2>
                <br><br>
            
        <!-- /Sección principales usuario -->

        <!-- Sección info cuenta-->

                <h4><?php echo $datos_usuario_cuenta['email'];?></h4>
                <br><br>
                <a href="infoUsuario/editarInfoUsuario.php"><button type="button" class="btn btn-secondary">Editar</button></a>
                <a href=""><button type="button" class="btn btn-danger">Cerrar sesión</button></a>
            </div>
        <!-- /Sección info cuenta-->
    </div>
</div>

<?php include 'templates/footer.php'?> 