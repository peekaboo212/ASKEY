<?php 
    include 'templates/header.php';
    include 'Realizar_pregunta_y_BD_final/Realizar_el_post/config.php';

    if(isset($_POST['correo'])){
      $to = $_POST['correo'];

      //consulta para saber si hay una cuenta con ese correo
      $consulta_correos_registrados = "SELECT * FROM `usuarios` WHERE `email`='$to'";
      $resultado_correos_registrados = mysqli_query ($conexion, $consulta_correos_registrados) or die ("sin conexion");
      $password_correo_registrados = mysqli_fetch_array($resultado_foto_usuario_cuenta);

      $totalFilas = mysqli_num_rows($resultado_correos_registrados); //Para saber si hay match con algun registro en la bd

      if($totalFilas == 0 ){
        ?>
          <div class="alert alert-danger text-center" role="alert">
          No hay una cuenta registrada con ese correo
          </div>
          <div class="container text-center mt-5">
              <img src="img/dinoLlorando.jpg" class="rounded-circle" height="250" width="250"  style="object-fit: cover;">
              <br>
              <a href="index.php"><button type="button" class="btn btn-secondary mt-5">Iniciar Sesión</button></a>
            </div>
        <?php
      }

      while($password_correo_registrados = mysqli_fetch_array( $resultado_correos_registrados)){
          $subject = "Recuperar contraseña";
          $message = "<header style='background: #A0CDE7;'><img src='https://sofiach.000webhostapp.com/main/img/Askey.png' width='170' style='float:rigth; margin-left:10px;'></header>";
          $message .= "<h1 style='color:black'>Hola ".$password_correo_registrados ['nombre'].", tu contraseña es:</h1>";
          $message .= "<h1 style='color:black'>".$password_correo_registrados ['clave']."</h1>";
          $header = "From:askey.equipo.desarrollo@gmail.com \r\n";
          $header .= "MIME-Version: 1.0\r\n";
          $header .= "Content-type: text/html\r\n";
          $res = mail($to,$subject,$message,$header);//Se encarga de enviar el correo
          if($res == true){
          ?>
            <div class="alert alert-success text-center" role="alert">
              Se ha enviado su contraseña a su correo
            </div>
            <div class="container text-center mt-5">
              <img src="img/dinoFeliz.jpeg" class="rounded-circle" height="250" width="250"  style="object-fit: cover;">
              <br>
              <a href="index.php"><button type="button" class="btn btn-secondary mt-5">Iniciar Sesión</button></a>
            </div>
          <?php
          }else {
          ?>
            <div class="alert alert-danger text-center" role="alert">
            Error al enviar el correo
            </div>
            <div class="container text-center mt-5">
              <img src="img/dinoLlorando.jpg" class="rounded-circle" height="250" width="250"  style="object-fit: cover;">
              <br>
              <a href="recuperar_password.php"><button type="button" class="btn btn-secondary mt-5">Reenviar</button></a>
            </div>
          <?php
          }
      }
      echo "<script>
      if (window.history.replaceState) { // verificamos disponibilidad
        window.history.replaceState(null, null, window.location.recuperar_password.php);
      }
      <script>";

    }
?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-6 mt-5">
      <div class="card p-4">

        <div class="row">
          <div class="col">
          <h5 class="card-title text-center" style="font-size: 40px;">Recuperar contraseña</h5>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card-body text-center">
              <form method="POST">
                <label for="exampleFormControlInput1" class="form-label" style="font-size: 17px;">Ingrese su correo para enviarle su contraseña</label>
                <br>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="correo" required>
                <button type="submit" class="btn btn-primary mt-2">Enviar correo</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
