<?php
class Animal
{
    public $raza;

    public function __construct($raza){ $this->raza = $raza; }
    public function __toString(){ return $this->raza; }
}

$raza1 = new Animal('Perro');
echo $raza1;

?>
