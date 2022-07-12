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
<!-- esta funcion no imprime nada en pantalla. solo asigna valores -->
<?php
class Trabajador{

public $nombre_apellidos; 
public $dni; 
public $sueldo; 


}

$trabajador1 = new Trabajador;
$trabajador1->nombre_apellidos = "Juan Perez";
$trabajador1->dni = "123456789D";
$trabajador1->sueldo = "20000";


?>
 

</body>
</html>
