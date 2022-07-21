<?php

class Factura{
  
// datos personales    
private $nombre;
private $direccion;
private $telefono;
// productos
private $patatas;
private $cebollas;
private $pimientos;
private $huevos;
private $manzanas;



private $estado;

    // CONSTRUCTOR  
    public function __construct($nombre, $direccion, $telefono, $patatas, $cebollas, $pimientos, $huevos, $manzanas)
    { 
       // aqui datos personales 
       $this->nombre = $nombre; 
       $this->direccion = $direccion;
       $this->telefono = $telefono;  
       // aqui productos
       $this->patatas = $patatas; 
       $this->cebollas = $cebollas; 
       $this->pimientos = $pimientos; 
       $this->huevos = $huevos; 
       $this->manzanas = $manzanas; 
    }  
    
    // SETTER  
    // aqui datos personales 
    public function setNombre($nombre){ $this->nombre = $nombre; }  
    public function setDireccion($direccion){ $this->direccion = $direccion; } 
    public function setTelefono($telefono){ $this->telefono = $telefono; } 
    // aqui productos 
    public function setPatatas($patatas){ $this->patatas = $patatas; } 
    public function setCebollas($cebollas){ $this->cebollas = $cebollas; } 
    public function setPimientos($pimientos){ $this->pimientos = $pimientos; } 
    public function setHuevos($huevos){ $this->huevos = $huevos; } 
    public function setManzanas($manzanas){ $this->manzanas = $manzanas; } 



    // GETTER  
    // aqui datos personales 
    public function getNombre(){ return $this->nombre; } 
    public function getDireccion(){ return $this->direccion; }  
    public function getTelefono(){ return $this->telefono; }  
    // aqui productos 
    public function getPatatas(){ return $this->patatas; }  
    public function getCebollas(){ return $this->cebollas; }  
    public function getPimientos(){ return $this->pimientos; }  
    public function getHuevos(){ return $this->huevos; }  
    public function getManzanas(){ return $this->manzanas; }  

    }

    

// cuando solo tengo codigo php ... elimino la siguiente linea 
//   ? >   