<!-- dado que vamos a trabajar con sesiones lo primero es iniciarlas -->
<?php session_start(); ?>

<!-- con isset se podria indicar 
si existe variable session... redireccionar a url
si no existe variable ..... redireccionar a menu login para meter datos 
-->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>

<?php include 'nav.php' ?>    

<?php include 'session.php' ?>
    
</body>
</html>
