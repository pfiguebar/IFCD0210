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
  
  // SETTER  
  public function setName($name) { $this->name = $name;   }
  
  // GETTER  
  public function getName() {   return $this->name;   }
  
}

// variables _construct
$person = new Alumnos();

// variables SETTER    
$person->setName('Bob Smith');

// variables GETTER    
echo $person->getName();
?>

 

</body>
</html>
