<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- cdn icnonos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Askey Home</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <header>
        <div class="container-fluid">
            <img id="logo" src="img/logo.jpeg">
        </div>
    </header>
    <main>
        <!--  -->
        <div class="contenedorFotoUsuario">
            <img id="foto" src="img/fotoUsuario.png">
        </div>
        <!-- ------------------------------------------------------------------------ -->
        <div class="contenedorHacerPregunta">
            <form action="" method="POST" id="hacerPregunta">
                <!-- Este div va a contener una caja para seleccionar la materia -->
                <div class="encabezadoPregunta">
                    <select name="materia" id="materia">
                        <option>Materia</option>
					    <option value="1">Programación web</option>
					    <option value="2">Diseño de interfaces</option>
					    <option value="3">Matemáticas para ing.</option>
				    </select>
                    <!--Vamos a añadir archivos? como hacerlo?-->
                </div>
                <input class="contenedorPregunta" type="text" name="pregunta" placeholder="Haz una pregunta...">
                <br>
                <input type="submit" value="Publicar" id="botonPublicar" class="btn btn-primary">
            </form>
        </div>
        <!-- --------------------------------------------------------------------------------------- -->
        <div class="contenedorFiltros">
            <form action="" method="POST" id="filtro">
                <select name="materia" id="materia">
                    <option>Materia</option>
					<option value="1">Programación web</option>
					<option value="2">Diseño de interfaces</option>
					<option value="3">Matemáticas para ing.</option>
				</select><br>
                <select name="mostrar" id="mostrar">
                    <option>Mostrar</option>
					<option value="1">Preguntas respondidas</option>
					<option value="2">Preguntas sin responder</option>
				</select><br>
                <select name="ordenar" id="ordenar">
                    <option>Ordenar por</option>
					<option value="1">Recientes</option>
					<option value="2">Ultimas</option>
                    <option value="3">Populares</option>
				</select><br>
                <input type="submit" value="Buscar" id="botonFiltro">
            </form>
        </div>
        <!-- --------------------------------------------------------------------------------------- -->
        <div class="contenedorPreguntas">
            <!-- En el encabezado aparecerá foto del usuario, nombre, materia y fecha de la pregunta
                    Dentro de cada div puedes hacer la conexion con la bd-->
            <div class="encabezadoPregunta">
                <!--Revisar la acomodación y consulta-->
                <div id="fotoUsuario"><img src="img/fotoUsuario.png" width="25px"></div>
                <div id="nombreUsuario">Nombre Usuario</div>
                <div id="materia">Materia</div>
                <div id="fecha">Fecha</div>
            </div>
            <!-- En este div va la pregunta -->
            <div id="pregunta">Pregunta</div>
            <div id="piePregunta">
                <form action="" method="POST">
                    <!--¿Cómo hacer los botones de reporte y like-->
                </form>
            </div>
        </div>
        <!-- --------------------------------------------------------------------------------------- -->
    </main>
</body>
</html>