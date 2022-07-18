<?php include ('./funciones.php'); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<form action="./pedido.php" method="POST" >
<input type="text" id="producto001" name="producto001">
<input type="text" id="producto002" name="producto002">
<input type="text" id="producto003" name="producto003">

<input type="submit" id="enviar" name="enviar"> 
</form>

</body>
</html>