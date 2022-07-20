<?php
require_once 'Factura.php';

if($_POST)
{
 // variables tomadas de formulario
 $base = $_POST["base"];  
 $estado = $_POST["estado"]; 
}

// CREAMOS UN OBJETO DE LA CLASE FACTURA
$factura1 = new Factura ($base, $estado);

// imprimo fecha actual 
$fecha = getdate();
echo $fecha['mday'] ." / ". $fecha['month'] ." / ". $fecha['year'];
echo "<br>";

// imprimo datos tomados por formulario
echo $factura1->getBase();
echo "<br>";
echo $factura1->getEstado() . " PAGADA";
echo "<br>";
 
?>

