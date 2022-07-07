<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- crear una funcion que me indique segun dia de la semana 
Hoy es Lunes -->


<?php
// $today = Date("d m y");   esto da fecha tipo 01 / 10 /2022
// $yesterday = Date("D");   esto da fecha solo dia modo texto "Monday" 
// echo $today;

$dia = Date ("D");

echo "Hoy es ";
    switch ("$dia"){
        case "Mon": echo "Lunes"; 
        break;
        case "Tue": echo "Martes"; 
        break;
        case "Wed": echo "Miercoles"; 
        break;
        case "Thu": echo "Jueves"; 
        break;
        case "Fri": echo "Viernes"; 
        break;
        case "Sat": echo "Sabado"; 
        break;
        case "Sun": echo "Domingo"; 
        break;
}

?>

</body>
</html>