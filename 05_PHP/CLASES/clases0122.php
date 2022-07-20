<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases Heredadas (2)</title>
</head>
<body>
    
<?php
// CLASE PRINCIPAL
class Producto{

public $nombre;
public $precio;


// CONSTRUCTOR  
// para definir precio inicial en constructor lo indicamos junto a variables $precio=0
public function __construct($nombre,$precio)
{ 
    $this->nombre = $nombre;
    $this->precio = $precio; 
}  


// FUNCIONES    
public function pvp()
{  
    return $this->precio * 1.21;  
}


public function resumen()
{    
    echo "Articulo: " .$this->nombre. "<br>"; 
    // podemos llamar a una funcion dentro otra funcion con este metodo 
    // $this->nombrefuncion()
    echo "Precio: " .$this->pvp() . "<br>";   
}


}
        // CLASES HEREDADAS

        class CD extends Producto
        { 
            public $duracion;

            // CONSTRUCTOR  
                public function __construct($nombre, $precio, $duracion)
                    { 
                        parent:: __construct($nombre, $precio);
                        $this->duracion = $duracion;
    
                    }  

                    // FUNCIONES    
                        public function resumen()
                            {
                                parent::resumen();  
                                echo "Duracion: " .$this->duracion. "<br>"; 
                            }
                
        }


        class Libro extends Producto
        { 
            public $paginas;

            // CONSTRUCTOR  
                public function __construct($nombre, $precio, $paginas)
                    { 
                        parent:: __construct($nombre, $precio);
                        $this->paginas = $paginas;
    
                    }  

                    // FUNCIONES    
                        public function resumen()
                            {  
                                parent::resumen();  // le indicamos escriba contendio resumen clase PADRE
                                echo "Numero paginas: " .$this->paginas. "<br>"; 
                            }
             
            

        }
                class LibroAntiguo extends Libro
                {
                    public $año;

                    // CONSTRUCTOR  
                        public function __construct($nombre, $precio, $paginas, $año)
                        { 
                            parent:: __construct($nombre, $precio, $paginas);
                            $this->año = $año;

                        }  

                    // FUNCIONES    
                        public function resumen()
                        {  
                            parent::resumen();  // le indicamos escriba contendio resumen clase PADRE
                            echo "Año publicación: " .$this->año. "<br>"; 
                        }

                }         
 
// variables __construct   // definimos directamente variable precio
// $producto0 = new Producto("Articulo por defecto", "0");
// $producto0->resumen();


    echo "<br>";
    echo "CLASE PRINCIPAL";
    echo "<br>";
    $producto1 = new Producto("Maluma", "10");   
    $producto1->resumen(); 

    // aqui imprimo clase hija CD
    echo "<br>";
    echo "CLASE HIJA CD";
    echo "<br>";
    $cd1 = new CD("Maluma", "10", "5");
    $cd1->resumen();

    // aqui imprimo clase hija Libro
    echo "<br>";
    echo "CLASE HIJA LIBRO";
    echo "<br>";
    $Libro1 = new Libro("Maluma", "10", "1000");
    $Libro1->resumen();

        // aqui imprimo clase hija LibroAntiguo
        echo "<br>";
        echo "CLASE HIJA DE CLASE LIBRO";
        echo "<br>";
        $LibroAntiguo1 = new LibroAntiguo("Maluma", "10", "1000", "1980");
        $LibroAntiguo1->resumen();
?>

</body>
</html>
