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


public function PintarTodasImagen()
{
    foreach (glob("./$this->ruta/*.jpg") as $filename){ 
    echo "<img style='$this->css' src='$filename'><br> "; 
    }
}

}

    

 
// variables __construct   // definimos directamente variable precio
$imagen1 = new Imagen("img", "001.jpg", "width: 140px; border: 1px solid black");   
$imagen1->PintaImagen();  
 


$imagen1->PintarTodasImagen(); 
?>
