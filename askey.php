<<<<<<< Updated upstream
<?php include 'templates/header.php'?> 
=======
<?php 
    include 'templates/header.php';
    include 'Realizar_pregunta_y_BD_final/Realizar_el_post/config.php';
?> 
>>>>>>> Stashed changes

<div class="container mt-4 ">
    <div class="row justify-content-between">

        <!-- Sección para mostrar foto del usuario -->
<<<<<<< Updated upstream
            <div class="col-12 col-md-3 text-center mb-5">
                <?php include 'Realizar_pregunta_y_BD_final/Realizar_el_post/config.php'; ?>
                <img src="subir_archivo/<?php echo $columna4['foto']; ?>" class="rounded-circle" width="200" height="200" style="object-fit: cover;">
            </div>
=======
        
            <div class="col-12 col-md-3 text-center mb-5">
                <a href="infoUsuario.php">
                    <img src="subir_archivo/<?php echo $columna4['foto']; ?>" class="rounded-circle" width="190" height="190" style="object-fit: cover;">
                </a>
            </div>
        
>>>>>>> Stashed changes
        <!-- /Sección para mostrar foto del usuario -->
        
        <!-- Sección realizar pregunta -->
        <div class="col-12 col-md-9">
            <div class="card">
                <!-- Elementos del encabezado -->
                <div class="card-header">
                    <div class="row">
                        <div class="">
<<<<<<< Updated upstream
                            Pregunta.
                            @nombre
=======
                            <img src="subir_archivo/<?php echo $columna4['foto']; ?>" class="rounded-circle" height="25" width="25"  style="object-fit: cover;">
                            <?php echo $datos_usuario_cuenta['nombre']; ?>
>>>>>>> Stashed changes
                        </div>
                    </div>
                </div>
                <!-- /Elementos del encabezado -->
                
                <!-- Contenido pregunta -->
                <div class="card-body">
                        <?php include 'Realizar_pregunta_y_BD_final/Realizar_el_post/config.php' ?>
                        <form method="post">
                            <textarea class="form-control" rows="3" placeholder="Haz tu pregunta" id="floatingTextarea" name="publicacion"></textarea>
                            <div class="d-flex justify-content-end">
                                <div class="m-1">
                                    <input type="hidden" name="oculto" value="1">
                                    <input type="submit" class="btn btn-primary" value="Publicar" name="publicar">
                                </div>
                            </div>
                        </form>
                        <?php include("Realizar_pregunta_y_BD_final/Realizar_el_post/publicacion.php"); ?>             
                </div>
<<<<<<< Updated upstream
                <!-- /Realizar publicacion -->
=======
                <!-- /Contenido pregunta -->
        <!-- /Sección realizar pregunta -->
>>>>>>> Stashed changes
            </div>
        </div>       
    </div>

    <div class="row justify-content-end">

        <!-- Seccion filtros -->
        <div class="col-12 col-md-3 mb-4 mb-md-0">
            <div class="container">
                <form  class="" method="POST" action="askey.php">
                <label class="form-label">Filtra tus preguntas</label>
                    <select class="form-select mb-2" aria-label="Default select example" name="materia">
                        <option selected>Materia</option>
                        <option value="1" >Bases de datos</option>
                        <option value="2">Diseño de interfaces</option>
                        <option value="3">Electricidad y magnetismo</option>
                        <option value="4">Hab cogn y creativ</option>
                        <option value="5">Inglés IV</option>
                        <option value="6">Mat ingeniería I</option>
                        <option value="7">Programación web</option>
                    </select>
                    <select class="form-select mb-2" aria-label="Default select example" name="mostrar">
                        <option selected>Mostrar</option>
                        <option value="1">Preguntas respondidas</option>
                        <option value="2">Preguntas sin responder</option>
                        <option value="3">Mis preguntas</option>
                    </select>
                    <select class="form-select mb-2" aria-label="Default select example" name="ordenar">
                        <option selected>Ordenar por</option>
                        <option value="1">Más populares</option>
                        <option value="2">Recientes</option>
                    </select>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-outline-primary" value="Ingresar">
                    </div>
                </form>
            </div>
        </div>
        <!-- /Seccion filtros -->
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        
        <!-- Sección realizar pregunta -->
        <div class="col-12 col-md-9">
            <div class="card">
                <!-- Elementos del encabezado -->
                <div class="card-header">
                    <div class="row">
                        <div class="">
                            Pregunta.
                            @nombre
                        </div>
                    </div>
                </div>
                <!-- /Elementos del encabezado -->
                
                <!-- Contenido pregunta -->
                <div class="card-body">
                        <?php include 'Realizar_pregunta_y_BD_final/Realizar_el_post/config.php' ?>
                            <textarea class="form-control" rows="3" placeholder="Haz tu pregunta" id="floatingTextarea" name="publicacion"></textarea>
                            <div class="d-flex justify-content-end">
                                <div class="m-1">
                                    <input type="hidden" name="oculto" value="1">
                                    <!-- Borrar luego -->
                                    <a href="Realizar_pregunta_y_BD_final/Realizar_el_post/feed.php"> View post </a>
                                    <input type="submit" class="btn btn-primary" value="Publicar" name="publicar">
                                </div>
                            </div>
                        <?php include("Realizar_pregunta_y_BD_final/Realizar_el_post/publicacion.php"); ?>             
                </div>
                <!-- /Realizar publicacion -->
            </div>
        </div>       
    </div>

    <div class="row justify-content-end">
=======

        <!-- Seccion mostrar preguntas -->
>>>>>>> Stashed changes
=======

        <!-- Seccion mostrar preguntas -->
>>>>>>> Stashed changes
        <div class="col-12 col-md-9 mt-4">
            <!-- Seccion mostrar preguntas -->
            <h1>Preguntas</h1>
            <hr>
            <?php include("Realizar_pregunta_y_BD_final/Realizar_el_post/feed.php"); ?>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
            <!-- /Seccion mostrar preguntas -->
        </div>
=======
        </div>
        <!-- /Seccion mostrar preguntas -->
>>>>>>> Stashed changes
=======
        </div>
        <!-- /Seccion mostrar preguntas -->
>>>>>>> Stashed changes
    </div>
    
</div>
<?php include 'templates/footer.php'?> 