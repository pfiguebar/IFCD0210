<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- crear una funcion que tome como parametros agenda e imprima tareas por dias -->

<?php

$semana = [
    "Lunes" => "Tarea Lunes",
    "Martes" => "Tarea Martes",
    "Miercoles" => "Tarea Miercoles",
    "Jueves" => "Tarea Jueves",
    "Viernes" => "Tarea Viernes",
    "Sabado" => "Tarea Sabado",
    "Domingo" => "Tarea Domingo"    
];


$mes = [
    "Enero" => "Tarea Enero",
    "Febrero" => "Tarea Febrero",
    "Marzo" => "Tarea Marzo",
    "Abril" => "Tarea Abril",
    "Mayo" => "Tarea Mayo",
    "Junio" => "Tarea Junio",
    "Julio" => "Tarea Julio"    
];
    
 function miagenda1($semana){
    foreach($semana as $keyagenda => $valueagenda){
        echo "$keyagenda su tarea es $valueagenda <br>";
    }

 } 

 function miagenda2($mes){
    foreach($mes as $keyagenda => $valueagenda){
        echo "$keyagenda su tarea es $valueagenda <br>";
    }

 } 


 ?>


 <?php
// llamamos funcion miagenda con valores semana
miagenda1($semana);
 ?>

<br>

<?php
// llamamos funcion miagenda con valores mes
miagenda2($mes);
 ?>



</body>
</html>