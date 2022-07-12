<!DOCTYPE html>
<html lang="es">
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

// CONSTRUCTOR  // se dispara automaticamente. Damos valores iniciales
public function __construct($nombre)
{ 
    $this->nombre = $nombre; 
}  

// SETTER  // hay que llamarlo. SET (poner) tal valor
public function setNombre($nombre)
{     
    $this->nombre = $nombre; 
}  

// GETTER    // hay que llamarlo. GET (obtener) tal valor
public function getNombre()
{  
    return $this->nombre;  
}  

}
    
    

//  variables __construct   // definimos directamente variable nombre
$persona1 = new Persona("Juan");   

// variables SETTER  // Sin crear nuevas personas, Variable Juan cambiala por Maria 
$persona1->setNombre("Maria");  

// variables SETTER    // Sin crear nuevas personas, Dame valor exista esa variable (echo = imprime) 
echo $persona1->getNombre();  

?>
    
</body>
</html>
