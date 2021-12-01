<?php 
    include 'templates/header.php';
    include 'Realizar_pregunta_y_BD_final/Realizar_el_post/config.php';

    if(isset($_POST['correo'])){
      $to = $_POST['correo'];
      //echo $to;

      //consulta para saber si hay una cuenta con ese correo
      $consulta_correos_registrados = "SELECT id FROM usuarios WHERE email=$to";
      $resultado_correos_registrados = mysqli_query ($conexion, $consulta_correos_registrados);
      $password_correo_registrados = mysqli_fetch_array($resultado_foto_usuario_cuenta);

      echo $password_correo_registrados;
      if(isset($password_correo_registrados)){
          $subject = "Recuperar contraseña";
          $message = "<b>HTML mensaje</b>";
          $message .= "<h1>Esta es una linea 0000</h1>";
          $header = "From:askey.equipo.desarrollo@gmail.com \r\n";
          $header .= "MIME-Version: 1.0\r\n";
          $header .= "Content-type: text/html\r\n";
          $res = mail($to,$subject,$message,$header);//Se encarga de enviar el correo
          if($res == true){
              echo "Mensaje enviado uuufff final 2021";
          }else {
              echo "Mensaje no enviado...buuu";
          }
      }else{
          echo "No hay una cuenta registrada con ese correo";
      }

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
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="correo">
                <button type="submit" class="btn btn-primary mt-2">Enviar correo</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
