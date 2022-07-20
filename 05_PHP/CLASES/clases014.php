<?php
// Aplicacion para que un restaurante haga su carta
//clase Plato
//constructor con nombre y descripcion y el resto con setters
//funcion damePlata con el nombre la desccripcion y el precio y este plato es apto celiaco y veg

//clase hija de plato llamada Entrante con atributo tipo(tapa, media racion o racion) 
//con el mismo constructor del padre y añadir el tipo, 
//y una funcion dame plato que si es tapa recalcule el precio y ponerle un tercio, 
//si es medio la mitad del precio y sie s entera poner el precio normal 

class Plato{

    public $nombre;
    public $descripcion;
    public $celiaco;
    public $vegano;
    public $precio;

    public function __construct($nombre, $descripcion){
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
    }

    public function setCeliaco($celiaco){
        $this->celiaco = $celiaco;
    }

    public function setVegano($vegano){
        $this->vegano = $vegano;
    }

    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function damePlato(){

        echo "<h2>$this->nombre.....  €$this->precio</h2>
        <p>$this->descripcion</p>";

        if($this->celiaco){
            echo "<h6>*Este plato es apto para celiacos.</h6>";
        } else {
            echo "<h6>*Este plato no es apto para celiacos.</h6>";
        }
        if($this->vegano){
            echo "<h6>*Este plato es apto para veganos.</h6>";
        } else {
            echo "<h6>*Este plato no es apto para veganos.</h6>";
        }
    }
}


class Entrante extends Plato{
    public $tipo;

    public function __construct($nombre, $descripcion, $tipo){
        parent::__construct($nombre, $descripcion);
        $this->tipo = $tipo;
    }

    public function damePlato(){
        parent::damePlato();

       if($this->tipo == "tapa"){
            echo "<p>Precio de la tapa: " . $this->precio / 3 . "</p";
        }else if($this->tipo == "media racion"){
            echo "<p>Precio de la media racion: " . $this->precio / 2 . "</p>";
        }

    }
}

$plato1 = new Plato("Huevos rotos", "Huevos con jamon patatas bla bla bla");
$plato1->setCeliaco(true);
$plato1->setVegano(false);
$plato1->setPrecio(9);
$plato1->damePlato();

$plato2 = new Plato("Carpacco de tomate", "Rodajas de tomate con aceite de oliva extra virgen, perejil y vinagre de jerez bla bla bla bla");
$plato2->setCeliaco(true);
$plato2->setVegano(true);
$plato2->setPrecio(5);
$plato2->damePlato();

$entrante1 = new Entrante("Croquetas", "Croquetas de jamon bla bla bla", "tapa");
$entrante1->setCeliaco(false);
$entrante1->setVegano(false);
$entrante1->setPrecio(9);
$entrante1->damePlato();


?>
