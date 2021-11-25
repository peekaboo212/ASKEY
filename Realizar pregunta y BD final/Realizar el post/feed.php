<html>
    <head>
    <meta charset="utf-8">  
    </head>
    <?php include 'config.php' 
        ?>
    
    
<body>
    
        
    <br> <br>
    
    
    
    
    <center>
    <h1>Las preguntas se mostraran asi, despues de publicarlas</h1> <br>
    
    
        
        <?php while($columna = mysqli_fetch_array( $resultado_2))
                {
        ?>
    
        
    <tr>
        
        <h3>
        <td> id de post ==  "<?php echo $columna ['Id_Post'] ?>" &nbsp;  Fecha de post ==  <td>  <?php echo $columna ['Fecha_Post'] ?></td>              <br/>
            <br>
        <td>  <?php echo $columna ['Texto'] ?></td>
            
        </h3>    
        
        <br><br><br><br><br><br><br><br><br><br><br><br>
        
        
        
        </tr>
 
                
    <?php  
        }
        ?>

    
    </center>
    
    
    
    
</body>





</html>