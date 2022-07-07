<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<!-- Ejercicio 1 condicionales = https://www.srcodigofuente.es/curso-php/soluciones-ejericicios-if-elseif-principiantes -->

<?php

$tipo_compra = "mascota";
$compra_importe = 18;

if ($compra_importe < 19 && $tipo_compra == "mascota") {
     
            echo "No se puede realizar el envío";
        }
    // caso producto es ropa
        else {
            echo "Los gastos de envío son 9 euros";
    }
    
   


?>
</body>
</html>