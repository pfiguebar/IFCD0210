<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- crear clase que mediante constructor definimos variable nombre. 
Crear luego un set y get para modificar esos datos -->

<?php
class Persona{

public $nombre;

public function __construct($nombre){   $this->nombre = $nombre; }  // se dispara automaticamente. Damos valores iniciales
public function setNombre($nombre){     $this->nombre = $nombre; }  // hay que llamarlo. SET (poner) tal valor
public function getNombre(){     return $this->nombre;    }  // hay que llamarlo. GET (obtener) tal valor

}

$persona1 = new Persona("Juan");   // definimos directamente variable nombre
// print_r($persona1);     // ejemplo para ver resultado linea anterior

$persona1->setNombre("Maria");  // Sin crear nuevas personas, Variable Juan cambiala por Maria 
// print_r($persona1);     // ejemplo para ver resultado linea anterior

echo $persona1->getNombre();  // Sin crear nuevas personas, Dame valor exista esa variable 
// echo      // ejemplo para ver resultado linea anterior. Eliminar echo si no se desea imprimir pantalla

?>
    
</body>
</html>