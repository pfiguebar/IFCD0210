<?php
require_once 'Conversor.php';

if($_POST)
{
 // variables tomadas de formulario
 $euros = $_POST["euros"];  
 $monedas = $_POST["monedas"]; 
 
}

// CREAMOS UN OBJETO DE LA CLASE CONVERSOR
$conversion1 = new Conversor ($euros, $monedas);

// imprimo datos tomados por formulario

switch ("$monedas"){
    case "yenes":       echo $conversion1->getEuros()*140.48 ; 
    break;
    case "dolares":     echo $conversion1->getEuros()*1.02   ; 
    break;
    case "libras":      echo $conversion1->getEuros()*0.85   ; 
    break;
    case "-1": "Seleccionar una moneda";
    break;
    
}






 
?>