<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases magicas</title>
</head>
<body>
    

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

 

</body>
</html>
