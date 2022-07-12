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


public function SetNombre_Apellidos(){   $this->nombre_apellidos ; }
public function SetDni(){    $this->dni ; }
public function SetSueldo(){   $this->sueldo ; }

}

$trabajador1 = new Trabajador;
$trabajador1->nombre_apellidos= "Juan Perez";
$trabajador1->dni= "123456789D";
$trabajador1->sueldo= "20000";

echo $trabajador1->Nombre_Apellidos();
echo $trabajador1->Dni();
echo $trabajador1->Sueldo();



?>




</body>
</html>
