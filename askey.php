<?php include 'templates/header.php'?> 

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("select *from articulos");
$ProArticulo= $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($ProArticulo);

?>
<!-- alerta-->
<?php
            include 'alerts.php';
            ?>
            <!-- alerta-->

<div class="container mt-4 ">
    <div class="row justify-content-between">

        <!-- Seccion filtros -->
        <div class="col-3 mt-lg-4 p-lg-4">
            <div class="container">
                <form  class="" method="POST" action="registrar.php">
                <label class="form-label">Filtra tus preguntas</label>
                    <select class="form-select mb-2" aria-label="Default select example">
                        <option selected>Materia</option>
                        <option value="1">Bases de datos</option>
                        <option value="2">Diseño de interfaces</option>
                        <option value="3">Electricidad y magnetismo</option>
                        <option value="4">Hab cogn y creativ</option>
                        <option value="1">Inglés IV</option>
                        <option value="1">Mat ingeniería I</option>
                        <option value="1">Programación web</option>
                    </select>
                    <select class="form-select mb-2" aria-label="Default select example">
                        <option selected>Mostrar</option>
                        <option value="1">Preguntas respondidas</option>
                        <option value="2">Preguntas sin responder</option>
                    </select>
                    <select class="form-select mb-2" aria-label="Default select example">
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
        
        <div class="col-12 col-lg-8 me-lg-5 ms-lg-5">
        
            
            <div class="card">
                <!-- Elementos del encabezado -->
                <div class="card-header">
                    <div class="row">
                        <div class="col-4 me-auto">
                            Pregunta.
                            @nombre
                        </div>
                    </div>
                </div>
                <!-- /Elementos del encabezado -->
                
                <!-- Realizar publicacion -->
                <div class="col-12 col-lg-9 me-lg-5 ms-lg-5 m-2">
                   
                        <?php include 'config.php' ?>
                        <form method="post">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" rows="3" placeholder="" id="floatingTextarea" name="publicacion"></textarea>
                                <label for="floatingTextarea">Haz tu pregunta</label>
                            </div>
                            <div class="md-3">
                                <input type="hidden" name="oculto" value="1">
                                <input type="submit" class="btn btn-primary " value="Publicar" name="publicar">
                            </div>
                        </form>
                        <?php include("publicacion.php"); ?>
                    
                </div>
                <!-- /Realizar publicacion -->
            </div>

            <!-- Seccion mostrar preguntas -->
            <div class="card mt-4">
                <div class="card-header">
                    Pregunta.
                </div>
                
                <div class="p-2">
                    <table class="table aling-middle p-2">
                        <thead>
                            <tr>
                                <th scope="col"> nombre</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($ProArticulo as $dato){
                            ?>
                            <tr>
                                <td scope="row"><?php echo $dato->idArticulo; ?></td>
                                <td><?php echo $dato->nombreArticulo; ?></td>
                                <td><?php echo $dato->descripcionArticulo; ?></td>
                                <td><?php echo $dato->precioArticulo; ?></td>
                                <td ><a class="text-success" href="editar.php?codigo=<?php echo $dato->idArticulo; ?>"><i class="bi bi-pencil-square"></a></i></td>
                                <td class="text-danger"><a href=""><i class="bi bi-trash"></a></i></td>

                                
                            </tr>
                            <?php
                            }
                            ?>

                            
                        </tbody>
                    </table>
                    <table class="table aling-middle">
                        <thead>
                            <tr>
                                <th scope="col"> nombre</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($ProArticulo as $dato){
                            ?>
                            <tr>
                                <td scope="row"><?php echo $dato->idArticulo; ?></td>
                                <td><?php echo $dato->nombreArticulo; ?></td>
                                <td><?php echo $dato->descripcionArticulo; ?></td>
                                <td><?php echo $dato->precioArticulo; ?></td>
                                <td ><a class="text-success" href="editar.php?codigo=<?php echo $dato->idArticulo; ?>"><i class="bi bi-pencil-square"></a></i></td>
                                <td class="text-danger"><a href=""><i class="bi bi-trash"></a></i></td>
                                
                            </tr>
                            <?php
                            }
                            ?>
                            
                        </tbody>
                    </table>
                    

                </div>
            </div>
            <!-- /Seccion mostrar preguntas -->
        </div>
       
    </div>
    
</div>

   
     