<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadenas</title>

</head>
<body>

<!-- crear una variable y asignar valor " a - a - r - e - f - a "
cambiar "a" por "tortuga"
separar en un array por " - "
calcular el numero de elementos del array
-->
<?php

function texto_original(){    
    $texto = "a-a-r-e-f-a"; 
    echo "$texto";    
 }

function cambiar_texto(){
    $texto = "a-a-r-e-f-a"; 
    $texto_cambiado = str_replace("a" , "tortuga", $texto);
    echo $texto_cambiado;

}

function cadena_array(){
$texto = "a-a-r-e-f-a"; 
$texto_array = explode("-", $texto);

// imprimir array
  echo "<pre>";
  print_r($texto_array);
  echo "<pre>";
}

function calcular_numero_array(){
$texto = "a-a-r-e-f-a"; 
$texto_array = explode("-", $texto);
// imprimir
echo "Nuestro array tiene: ";
echo count($texto_array);
echo " valores";

}

?>


<?php texto_original(); ?>
<br>
<?php cambiar_texto(); ?>
<br>
<?php cadena_array(); ?>
<br>
<?php calcular_numero_array(); ?>

</body>
</html>