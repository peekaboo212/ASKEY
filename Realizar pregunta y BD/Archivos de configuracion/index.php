<html>
    <head>
    <meta charset="utf-8">
  
    </head>
    <?php include 'config.php' 
        ?>
    

<?php 
    
    if($conexion){
        
        echo"<h1> conexion exitosa </h1>";
    }
    ?>

    <body>
    
    
<<<<<<< Updated upstream:Realizar pregunta y BD/Archivos de configuracion/index.php
    <form method="post">
        
        
        <h1>Realiza una pregunta</h1>
        
        <input type="text" name="publicacion" placeholder="Escribe aqui tu pregunta" required>
        
        <input type="submit" name="publicar">
        
=======
        <form method="post">
        

            <h1>Realiza una pregunta</h1>
            
            <input type="text" name="publicacion" placeholder="Escribe aqui tu pregunta" required>
            
            <input type="submit" name="publicar"> 
            
            <a href="feed.php"> View post </a>
>>>>>>> Stashed changes:Realizar_pregunta_y_BD_final/Realizar_el_post/index.php
        
        
        </form>
        
        <?php include("publicacion.php"); ?>
    
    
    
    
    
    
    </body>
    
    
    
    
    

</html>