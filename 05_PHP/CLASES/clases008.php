<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1) Crear clase que se llama Empleado 
         2) Crar un constructor que asigne esas variables
         3) Funcion 
     -->

    <?php
    class Empleado{
        public $nombre;
        public $sueldo;

        public function __construct($nombre, $sueldo)
        {
            $this->nombre = $nombre;
            $this->sueldo = $sueldo;
        }

        // FUNCIONES 
        public function Nombre(){   
            echo "El empleado se llama $this->nombre y ";       
        }

        public function Sueldo(){
            if($this->sueldo > 2000 ){ echo "cobra mucho"; }
            else{echo "cobra poco";}
        }
    }
    
    // 2 variable __construct
    $empleado1 = new Empleado("Maria", 3000);
    
    // 2 variable FUNCIONES
    $empleado1->Nombre();
    $empleado1->Sueldo();
    

    ?>

</body>
</html>