<?php

class Conversor{
    
private $euros;
private $monedas;


    // CONSTRUCTOR  
    public function __construct($euros, $monedas)
    { 
       $this->euros = $euros; 
       $this->yenes = $monedas; 
       
    }  
    
    // SETTER  
    public function setEuros($euros){ $this->euros = $euros; }  
    public function setMonedas($monedas){ $this->monedas = $monedas; } 
    
    
    // GETTER    
    public function getEuros(){ return $this->euros; } 
    public function getMonedas(){ return $this->monedas; }  
   
    
    }

    

// cuando solo tengo codigo php ... elimino la siguiente linea 
//   ? > 