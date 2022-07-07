<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<!-- Ejercicio 3 IF y ELSE IF  = https://www.srcodigofuente.es/curso-php/soluciones-ejericicios-if-elseif-principiantes -->

<?php

$total_compra = 50;

if ($total_compra < 30){
   echo "Compra más o te cobraremos los abusivos 30 euros de gastos de envío";
} 

else if ($total_compra >= 30 && $total_compra < 90) {
   $importe_faltante = 90 - $total_compra;
   echo "¡¡¡Con solo " . $importe_faltante . "€ más podrás tener gastos de envío gratis!!!";
} 

else { 
   echo "¡Sí sí sí! Gastos de envío incluídos ¡Vuelve pronto!";
}
?>

</body>
</html>