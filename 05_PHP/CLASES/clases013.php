<?php

class greeting {

    public static function welcome(){
        echo "Hola mundo!<br>";
    }
}

//llamo al metodo estatico
//no es necesario crear un objeto para usar el metodo
greeting::welcome();

echo "<hr>";

//crear interfaz que se llame Acciones que tenga una funcion moverse() y otra comer()
//crea una clase gato que implemente interface Acciones y en la funcion moverse diga "gato se mueve sigilisamente"
//y en la funcion comer que diga "El gato come ratones"

//crea una clase que implemente acciones que se llame Boa que moverse() sea "La boa repta" y comer "la boa come ratones pero no los mastica"

interface Acciones{
    public function moverse();

    public function comer();
}

class Gato implements Acciones{
    public function moverse(){
        echo "El gato se mueve sigilosamente<br>";
    }

    public function comer(){
        echo "El gato come ratones<br>";
    }
}

class Boa implements Acciones{
    public function moverse(){
        echo "La boa repta<br>";
    }

    public function comer(){
        echo "La boa come ratones pero no los mastica<br>";
    }
}

$gato1 = new Gato;
$gato1->moverse();
$gato1->comer();

$boa1 = new Boa;
$boa1->moverse();
$boa1->comer();

echo "<hr>";

//sobrecarga: poder pasarle un parametro a una funcion que ya hace algo sin llevar parametros.
//destructor: borra el objeto. funcion __destruct()


//cconectarse a un a base de datos
//mysql tiene una clase predefinida mysqli()
?>
