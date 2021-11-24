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
    
    
    <form method="post">
        
        
        <h1>Realiza una pregunta</h1>
        
        <input type="text" name="publicacion" placeholder="Escribe aqui tu pregunta" required>
        
        <input type="submit" name="publicar">
        
        
        
        </form>
        
        <?php include("publicacion.php"); ?>
    
    
    
    
    
    
    </body>
    
    
    
    
    

</html>