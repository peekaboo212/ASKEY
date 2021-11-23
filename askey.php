<?php include 'templates/header.php'?>

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("select *from articulos");
$ProArticulo= $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($ProArticulo);

?>

<div class="container-fluid mt-4 ">
    <div class="row">
    <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Materia
                </div>
                <form  class="p-4" method="POST" action="registrar.php">
                <select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" autofocus autocomplete="off"  >

                    </div>
                
                    <div class="mb-3">
                        <label class="form-label">Descripcion</label>
                        <input type="text" class="form-control" name="descripcion" autofocus autocomplete="off" >
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Precio</label>
                        <input type="text" class="form-control" name="price" autofocus autocomplete="off"  >
                        
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Ingresar">
                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-9">
            <!-- alerta-->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'nocompleted'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>¡Olvidaste Algo!</strong> Rellena todos los campos.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             <?php 
            }?>
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'completo'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Correcto!</strong> Registro completado.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             <?php 
            }?>

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'actualizado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>¡Correcto!</strong> Registro actualizado.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             <?php 
            }?>

            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>¡Error!</strong> Intente de nuevo.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
             <?php 
            }?>
            <!-- alerta-->
            <div class="card">
                <div class="card-header">
                    Pregunta.
                </div>
                <div class="p-2">
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
        </div>
       
    </div>
    
</div>

   
     