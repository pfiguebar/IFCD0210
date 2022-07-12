<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <!-- 
   clase que tenga nombre perro
   tiene de atributos nombre, raza y edad 
   un constructor para perro, pero solo pide nombre
   funcion SET edad y SET raza
   funcion ladrar que escriba mi perro es de la raza y dice guau guau

   crear un perro nuevo que se llama crispi, dalmata y ladra
    -->

    <?php
    class Perro{
        public $nombre;
        public $raza;
        public $edad;

        // CONSTRUCT
        public function __construct($nombre){   $this->nombre = $nombre;    }

        // SETTER
        public function SetRaza($raza){   $this->raza = $raza;    }
        public function SetEdad($edad){   $this->edad = $edad;    }

        // LADRAR
        public function ladrar(){  echo "mi perro $this->nombre es de la raza $this->raza y dice guau";   }

    }

    // 1 variable __construct
    $perro1 = new Perro("Crispi");
    
    // variables SETTER
    $perro1->setRaza("dalmata");
    $perro1->setEdad("10");
    
    // LLamar funcion ladrar
    echo $perro1->ladrar();

    ?> 
</body>
</html>
