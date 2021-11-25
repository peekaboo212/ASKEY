<?php
require 'model_grafico.php';

$MG = new Model_Grafico();
$consulta = $MG -> TraerDatosGrafica1();
echo json_encode($consulta);
?>