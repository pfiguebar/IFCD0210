<?php
session_start();
$_SESSION['usuario'] = "Manolo";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <p>HOLA</p>
    <?php echo $_SESSION['usuario'] ?>
   
    
    </body>
</html>
