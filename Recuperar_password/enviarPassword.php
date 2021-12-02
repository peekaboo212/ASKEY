<?php
    include '../templates/header.php';
    include '../Realizar_pregunta_y_BD_final/Realizar_el_post/config.php';

    $to = $_POST['correo'];
    echo $to;

    //consulta para saber si hay una cuenta con ese correo
    $consulta_correos_registrados = "SELECT clave FROM usuarios WHERE email=$to";
    $resultado_correos_registrados = mysqli_query ($conexion, $consulta_correos_registrados);
    $password_correo_registrados = mysqli_fetch_array($resultado_foto_usuario_cuenta);

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

?>