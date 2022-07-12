<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
    nombre, nif, direccion, email, tlf 
    constructor (nombre, nif)
    setter (direccion, telefono, email)
    getter (de cada uno)
    dame info (todo)
    
-->  

<?php 
class Empresa{
    public $nombre;
    public $nif;
    public $direccion;
    public $telefono;
    public $email;

    public function __construct($nombre, $nif)
    {
        $this->nombre = $nombre;
        $this->nif = $nif;
    }

    // SETTER
    public function setDireccion($direccion){   $this->direccion = $direccion;     }
    public function setTelefono($telefono){    $this->telefono = $telefono;       }
    public function setEmail($email){    $this->email = $email;     }

    // GETTER 
    public function getNombre(){ return $this->nombre;}
    public function getNif(){ return $this->nif;}
    public function getDireccion(){ return $this->direccion;}
    public function getTelefono(){ return $this->telefono;}
    public function getEmail(){ return $this->email;}

    // DAME INFO
    public function DameInfo(){
        
        echo "<h1>$this->nombre</h1>";
        echo "<p>$this->nif</p>";
        echo "<p>$this->direccion</p>";
        echo "<p>$this->telefono</p>";
        echo "<p>$this->email</p>";

    }

}
// Las 2 variables __construct
$empresa1 = new Empresa("Plasticos Maruchi", "12345678P"); 

// variables SETTER
$empresa1->setDireccion("Calle La Bolsa 31");  
$empresa1->setTelefono("952213939");
$empresa1->setEmail("hola@plasticosmaruchi.es");

// LLamar funcion imprimir
$empresa1->DameInfo();
?> 
</body>
</html>
