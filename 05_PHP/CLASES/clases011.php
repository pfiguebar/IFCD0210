<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases heredadas PADRE - HIJAS</title>


</head>
<body>

<!-- 
definir una clase padre Animal
atributos: numero patas ($npatas) y familia ($familia)
setter y getter atributo


definir una clase hija Mamifero
atributos: nombre ($nombre) y numero cuernos ($ncuernos)
setter y getter attributo
-->

<?php 
// CLASE PADRE
class Animal{
    public $npatas;
    public $familia;

    // CONSTRUCTOR  (no esta definida)

    // SETTER
    public function set_patas($npatas){   $this->npatas = $npatas; }
    public function set_familia($familia){  $this->familia = $familia;  }

    // GETTER 
    // public function get_patas(){ return $this->npatas;  }
    // public function get_familia(){  return $this->familia;  }

    // DAME INFO
    public function dameInfoPadre(){
        echo "Estos datos son PADRE";
        echo "<table><td>";
        echo "<tr><p> $this->familia </p></tr>";
        echo "<tr><p> $this->npatas </p></tr>";
        echo "</td></table>";
        echo "<br>";
    }

}


    // CLASES HEREDADAS (clase hija Mamifero hereda de clase padre Animal)
    class Mamifero extends Animal{
        public $nombre;
        public $ncuernos;

        // CONSTRUCTOR   (no esta definida)

        // SETTER
        public function set_nombre($nombre){    $this->nombre = $nombre;     }
        public function set_cuernos($ncuernos){  $this->ncuernos = $ncuernos;   }

        // GETTER
        // public function get_nombre(){  return $this->nombre;  }
        // public function get_ncuernos(){  return $this->ncuernos;   }

        // DAME INFO
        public function dameInfoHijo(){
            echo "Estos datos son HIJO";
            echo "<p> $this->nombre </p>";
            echo "<p> $this->ncuernos </p>";
            echo "<br>";
        }
    }

// CLASES PADRE
// variable _constructor 
$animal1 = new Animal();

// variables SETTER
$animal1->set_patas("0");
$animal1->set_familia("aracnidos");

// llamada funcion dame info
$animal1->dameInfoPadre();


        // CLASE HIJA
        // variable _constructor
        $araña = new Mamifero();
        // variable SETTER
        $araña->set_nombre("Tarantula");
        $araña->set_cuernos("0");
        
        // llamada funcion dame info
        $araña->dameInfoHijo();
        
        
?>        
</body>
</html>