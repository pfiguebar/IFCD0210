
<?php

class Factura{
    
private $base;
private $estado;

    // CONSTRUCTOR  
    public function __construct($base, $estado)
    { 
       $this->base = $base; 
       $this->estado = $estado; 
    }  
    
    // SETTER  
    public function setBase($base){ $this->base = $base; }  
    public function setEstado($estado){ $this->estado = $estado; } 
    
    // GETTER    
    public function getBase(){ return $this->base; } 
    public function getEstado(){ return $this->estado; }  
    
    }

    

// cuando solo tengo codigo php ... elimino la siguiente linea 
//   ? >   
