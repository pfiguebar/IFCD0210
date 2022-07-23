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
