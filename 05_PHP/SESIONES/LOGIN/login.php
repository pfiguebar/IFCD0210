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
    <title>Document</title>
</head>
<body>

<nav>
    <ul>
        <li>LOGIN <br>
        
        <!-- isset = si existe (variable session usuario)... haz esto (imprime esa variable)--> 
        <?php if(isset($_SESSION["usuario"])) 
        {
            echo $_SESSION["usuario"] ;
            
        }
        ?>

        <!-- fin isset -->
        </li>
    </ul>
</nav>    

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

        // para indicarle que si he puesto bien los datos, cargue pagina destino
        header ("Location: ./login.php");
        

        
        



}
else{ 
    echo "hay un error en su datos acceso";
}
    
}


?>

</body>
</html>