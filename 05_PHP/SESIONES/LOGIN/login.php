<!-- dado que vamos a trabajar con sesiones lo primero es iniciarlas -->
<?php session_start(); ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="" method="POST" >
    <input type="text" id="usuario" name="usuario">
    <input type="text" id="password" name="password">
    
    <input type="submit" id="enviar" name="enviar">
</form>

<?php

if($_POST){                         // primero comprobar si formulario se ha enviado antes
                                    // recordar que $_POST hace array asociativo 

$usuario  = $_POST["usuario"];         // creamos un variable que guarda valor enviado en name="usuario"
$password = $_POST["password"];     // idem con name="password"  


// comprobamos los valores datos recibidos via $_POST

if($usuario == "user" && $password == "1234"){
        // si datos coinciden con nuestros datos acceso. Nos envia a logeado
        // Si estamos logeado, creamos una variable session con datos correctos
        $_SESSION["usuario"] = "user";
        $_SESSION["password"] = "1234";

        // cargamos con include pantalla logeado
        // <?php include ("pantalla-logeado.php");
        
        // Por ejemplo podemos poner dentro de ese include ... Bievenido Usuario
         // echo "Bienvenido ". $_SESSION["usuario"] . "<br>Esta usted en su panel logedo<br>";
        

        
        



}
else{ 
    echo "hay un error en su datos acceso";
}
    
}


?>

</body>
</html>