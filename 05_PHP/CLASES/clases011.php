<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get y set</title>
</head>
<body>
    
<?php 
class Articulo{
    public $nombre;
    public $precio;
    

    public function __construct($nombre, $precio)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    // SETTER
    public function setNombre($nombre){  $this->nombre = $nombre;     }
    public function setPrecio($precio){  $this->precio = $precio;     }
    
    // GETTER 
    public function getNombre(){ return $this->nombre;}
    public function getPrecio(){ return $this->precio;}
    

    // DAME INFO
    public function pintaArticulo(){
        echo "
        <div>
        <h3>Nombre: $this->nombre </h3>
        <h4>Precio: $this->precio </h4>
        </div>
        ";
        
    }

}

        class Articulo_rebajado extends Articulo{
            public $precio_rebajado;
            // la herencia constructor es especial. Heredo estructura pero no valores variables 
            // Hay que indicar parent:: __construct($variable1, $variable2);
            // Tambien hay que añadir variable1 y variable2 a funcion constructor
            public function __construct($nombre, $precio, $precio_rebajado)
            {
                parent:: __construct($nombre, $precio);
                $this->precio_rebajado = $precio_rebajado;
            }

            // DAME INFO
            public function pintaArticuloRebajado(){
                echo "
                <div>
                <h4 style='color:red'>Precio Rebajado: $this->precio_rebajado  en vez de  $this->precio</h4>
                </div>
                ";
        
    }


        }





// Las 2 variables __construct clase PADRE
$articulo1 = new Articulo("Bicicleta", "1500"); 

// Las 3 variables __construct clase HIJO
$articulo_rebajado1 = new Articulo_Rebajado ("Bicicleta", "1500", "1200");

// variables SETTER
// $articulo1->setNombre("");  
// $articulo1->setPrecio("");

// LLamar funcion imprimir
$articulo1->pintaArticulo();
$articulo_rebajado1->pintaArticuloRebajado();
?>
</body>
</html>