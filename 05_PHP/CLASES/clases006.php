<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getter con operaciones numericas</title>
</head>
<body>

<!-- crea clase FUNCION CONSTRUCTORA que calcule precio inmueble a partir metros cuadrados y precio metro cuadrado -->

<?php
class Inmueble {

public $metros_cuadrado;
public $precio_unitario;

// CONSTRUCTOR    
public function __construct($metros_cuadrado, $precio_unitario)
{
    $this->metros_cuadrado = $metros_cuadrado;
    $this->precio_unitario = $precio_unitario;
}

// GETTER    
public function calculo_precio()
{ 
    return $this->metros_cuadrado  *  $this->precio_unitario; 
}
    
    
}

// variables __construct    
$mi_pisito = new Inmueble (10,10);

// variables GETTER     
echo $mi_pisito->calculo_precio();

?>
 
    
</body>
</html>
