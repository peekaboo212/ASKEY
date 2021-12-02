<!doctype html>
<html lang="es">
  <head>
    <title>Productos </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar" style="background-color: #A0CDE7;">
        <div class="container">
            <a class="navbar-brand" href="askey.php">
                <img src="../img/Askey.png" alt="" height="50">
            </a>
        </div>
    </nav>
<?php 
    include '../Realizar_pregunta_y_BD_final/Realizar_el_post/config.php';
    if(isset($_POST['carrera'])){
        $nombre = $_POST['nombre'];
        $carrera = $_POST['carrera'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        //Consultas obtener datos del usuario de la cuenta
        $consulta_actualizar_datos_usuario ="UPDATE `usuarios` SET `nombre`='$nombre', `email`='$correo', `clave`='$password' WHERE `id`='$idUsuario'";
        $resultado_actualizar_datos_usuario = mysqli_query($conexion,$consulta_actualizar_datos_usuario) or die ("no se hizo la consulta");

        if($resultado_actualizar_datos_usuario){
        ?>
            <div class="alert alert-success text-center" role="alert">
                Se guardaron los cambios
            </div>
            <div class="container text-center mt-5">
              <img src="../img/dinoFeliz.jpeg" class="rounded-circle" height="250" width="250"  style="object-fit: cover;">
              <br>
              <a href="../Askeys.php"><button type="button" class="btn btn-secondary mt-5">Regresar</button></a>
            </div>
        <?php
        echo "<script>
        if (window.history.replaceState) { // verificamos disponibilidad
          window.history.replaceState(null, null, window.location.../infoUsuario.php);
        }
        <script>";


        }else{
        ?>
            <div class="alert alert-danger text-center" role="alert">
                No se guardaron los cambios
            </div>
            <div class="container text-center mt-5">
              <img src="../img/dinoLlorando.jpg" class="rounded-circle" height="250" width="250"  style="object-fit: cover;">
              <br>
              <a href="editarInfoUsuario.php"><button type="button" class="btn btn-secondary mt-5">Reintentar</button></a>
            </div>
        <?php
        }
    }
?>

<div class="container mt-4">
    <!-- Sección espacio -->
        <div class="container d-none d-lg-block" style="height:80px;"></div>
    <!-- /Sección espacio -->
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title mt-4 mb-4" style="font-size:45px;">Editar perfil</h5>
                    <div class="row justify-content-center">
                        <div class="col-8 mb-4">
                            <form  method="POST">
                                <input class="form-control " type="text" placeholder="Nombre" aria-label="default input example" name="nombre" required>
                                <br>
                                <select class="form-select mb-2" aria-label="Default select example" name="carrera">
                                    <option selected >Carrera</option>
                                    <option value="1" >Ing. Software</option>
                                </select>
                                <br>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="correo" required>
                                <br>
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Contraseña" required>
                                <br>
                                <a href="../infoUsuario.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../templates/footer.php'?> 