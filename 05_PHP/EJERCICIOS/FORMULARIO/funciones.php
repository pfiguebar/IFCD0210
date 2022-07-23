<?php
if($_POST)
{
 // variables tomadas de formulario
 $tipo_vivienda = $_POST["tipo_vivienda"];         
 $zona_ciudad = $_POST["zona_ciudad"];  
 $n_habitaciones = $_POST["n_habitaciones"];
 $precio = $_POST["precio"];
 $metros = $_POST["metros"];
 $extras001 = $_POST["extras001"];
 $extras002 = $_POST["extras002"];
 $extras003 = $_POST["extras003"];
 $observaciones = $_POST["observaciones"];
}

// creo un array con todas las variables
$array_datos = [$tipo_vivienda, $zona_ciudad, $n_habitaciones, $precio, $extras001, $extras002, $extras003, $observaciones];


// funcion que recorre todo array y lo imprime
 function imprimir($array_datos)
 {
    for ($contador = 0; $contador < count($array_datos); $contador ++){  
        echo "<p>$array_datos[$contador]</p>"; 
    }    
    
    }

?>   
