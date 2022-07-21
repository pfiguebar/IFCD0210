<?php
require_once 'Factura.php';

if($_POST)
{
 // variables tomadas de formulario
 // datos personales
 $nombre = $_POST["nombre"];  
 $direccion = $_POST["direccion"]; 
 $telefono = $_POST["telefono"];
 // productos
 $patatas = $_POST["patatas"];
 $cebollas = $_POST["cebollas"];
 $pimientos = $_POST["pimientos"];
 $huevos = $_POST["huevos"];
 $manzanas = $_POST["manzanas"];
 
}

// CREAMOS UN OBJETO DE LA CLASE FACTURA
$factura1 = new Factura ($nombre, $direccion, $telefono, $patatas, $cebollas, $pimientos, $huevos, $manzanas );

$precio_patatas = 1;
$subtotal_patatas = $patatas*$precio_patatas;

$precio_cebollas = 2;
$subtotal_cebollas = $cebollas*$precio_cebollas;

$precio_pimientos = 3;
$subtotal_pimientos = $pimientos*$precio_pimientos;

$precio_huevos = 4;
$subtotal_huevos = $huevos*$precio_huevos;

$precio_manzanas = 5;
$subtotal_manzanas = $manzanas*$precio_manzanas;

$total = $subtotal_patatas+$subtotal_cebollas+$subtotal_pimientos+$subtotal_huevos+$subtotal_manzanas;
?>
<!--  imprimo datos tomados por formulario  -->
<?php include 'tabla.php' ?>