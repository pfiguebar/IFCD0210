<?php
// CLASE PRINCIPAL
class Imagen{

public $nombre;
public $ruta;
public $css;


// CONSTRUCTOR  
// para definir precio inicial en constructor lo indicamos junto a variables $precio=0
public function __construct($ruta, $nombre, $css=0)
{ 
    $this->ruta = $ruta;
    $this->nombre = $nombre;
    $this->css = $css; 
}  


// FUNCIONES    
public function pintaUrl(){     return $this->ruta; }
public function pintaNombre(){     return $this->nombre; }
public function pintaCSS(){     return $this->css; }


public function PintaImagen()
{  
    echo "<img src='./$this->ruta/$this->nombre' style='$this->css' />";
}

}
 
// variables __construct   // definimos directamente variable precio
$imagen1 = new Imagen("img", "001.jpg", "border: 1px solid black");   
$imagen1->PintaImagen();  
 

?>