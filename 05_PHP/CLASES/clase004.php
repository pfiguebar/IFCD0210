<!-- crear una clase que tenga nombre TITULO
que tenga 2 atributos: cabecera y color fondo
que tenga 1 metodo que pinte h1 con cabecera y color fondo
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


public function poner_texto(){
echo "
<div style='background-color: $this->fondo '> 
<h1> $this->cabecera </h1>
</div>
";    

    
}

}

$texto1 = new Titulo;
$texto1->cabecera = "curso programacion";
$texto1->fondo = "orange";
$texto1->poner_texto(); 

 

?>
    
</body>
</html>
