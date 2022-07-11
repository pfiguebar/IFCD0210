<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<!-- metodo 1 -->
<?php
class Trabajador{

public $nombre_apellidos; 
public $dni; 
public $sueldo; 

public function Nombre_Apellidos_Imprimir(){
    echo "$this->nombre_apellidos <br>";
}

public function Dni_Imprimir(){
    echo "$this->dni <br>";
}

public function Sueldo_Imprimir(){
    echo "$this->sueldo <br>";
}

}

$trabajador1 = new Trabajador;
$trabajador1->nombre_apellidos= "Juan Perez";
$trabajador1->dni= "123456789D";
$trabajador1->sueldo= "20000";

$trabajador1->Nombre_Apellidos_Imprimir();
$trabajador1->Dni_Imprimir();
$trabajador1->Sueldo_Imprimir();


$trabajador2 = new Trabajador;
$trabajador2->nombre_apellidos= "Paco Garcia";
$trabajador2->dni= "987654321D";
$trabajador2->sueldo= "10000";

$trabajador2->Nombre_Apellidos_Imprimir();
$trabajador2->Dni_Imprimir();
$trabajador2->Sueldo_Imprimir();

?>




</body>
</html>