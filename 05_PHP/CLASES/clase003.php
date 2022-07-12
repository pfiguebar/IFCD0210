<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo PRIVATE</title>
</head>
<body>
    

<!-- variables private -->
<?php
class Alumnos
{
  private $name;
 
  public function getName()
  {
    return $this->name;
  }
 
  public function setName($name)
  {
    $this->name = $name;
  }
}
 
$person = new Alumnos();

$person->setName('Bob Smith');
echo $person->getName(); // prints 'Bob Smith'
?>

 

</body>
</html>
