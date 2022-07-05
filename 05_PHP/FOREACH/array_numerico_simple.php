<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR EACH</title>

</head>
<body>

<!-- 
FOREACH se usa tambien para recorrer array. 
A diferencia FOR no es necesario declarar valor inicial y final

FOREACH se usa para array asociativos 
$array_asociativo = ["nombre" => "Pepe", "edad" => "18"];

-->

<?php

$array_asociativo_numerico = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];

// Recordar que array asociativo numerico seria asi, donde primero es $indice y segundo $valor 
// $array_asociativo_numerico = ["0" => "Lunes", "1" => "Martes", "2" => "Miercoles", "3" => "Jueves", "4" => "Viernes"];


foreach ($array_asociativo_numerico as $indice => $dia){
    echo "$indice $dia<br>";
}

?>

    
</body>
</html>
