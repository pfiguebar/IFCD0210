<!-- crear una clase que tenga nombre TITULO
que tenga 2 atributos: cabecera y color fondo
que tenga 3 metodos que pinte h1 izquierda, centro y derecha
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
class Titulo{

public $cabecera;
public $fondo;
public $derecha;
public $izquierda;
public $centro;



public function poner_texto_derecha(){
echo "
<div style='background-color: $this->fondo ; text-align: $this->derecha'> 
<h1> $this->cabecera </h1>
</div>
";    
   
}


public function poner_texto_izquierda(){
echo "
<div style='background-color: $this->fondo ; text-align: $this->izquierda'> 
<h1> $this->cabecera </h1>
</div>
";    
        
}

public function poner_texto_centro(){
echo "
<div style='background-color: $this->fondo ; text-align: $this->centro'> 
<h1> $this->cabecera </h1>
</div>
";    

}

}

$texto1 = new Titulo;
$texto1->cabecera = "curso programacion";
$texto1->fondo = "orange";
$texto1->derecha = "right";
$texto1->izquierda = "left";
$texto1->centro = "center";

$texto1->poner_texto_derecha(); 
$texto1->poner_texto_izquierda(); 
$texto1->poner_texto_centro(); 



?>
    
</body>
</html>