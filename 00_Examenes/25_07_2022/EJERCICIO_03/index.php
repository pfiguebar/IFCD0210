<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO 003</title>
    
</head>
<body>

<?php
class Academia{

public $nombre;
public $apellidos;
public $dni;

// CONSTRUCTOR  
public function __construct($nombre)
{ 
    $this->nombre = $nombre; 
    $this->apellidos = $apellidos; 
    $this->dni = $dni; 

}  

// SETTER  
public function setNombre($nombre){   $this->nombre = $nombre; }  
public function setApellidos($apellidos){   $this->apellidos = $apellidos; }  
public function setDni($dni){   $this->dni = $dni; }  

// GETTER    
public function getNombre(){  return $this->nombre;  }  
public function getApellidos(){  return $this->apellidos;  } 
public function getDni(){  return $this->dni;  } 

}
   
        // clase hijo
        class Alta extends Alumnos
        {

        }

        // clase hijo
        class Baja extends Alumnos
        {

        }
    

//  variables __construct   // definimos directamente variable nombre
// $persona1 = new Persona("Juan");   

// variables SETTER  // Sin crear nuevas personas, Variable Juan cambiala por Maria 
// $persona1->setNombre("Maria");  

// variables SETTER    // Sin crear nuevas personas, Dame valor exista esa variable (echo = imprime) 
// echo $persona1->getNombre();  

?>

    
</table>
</body>
</html>