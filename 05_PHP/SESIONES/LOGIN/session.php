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
        header ("Location: ./index.php");

}
else{ 
    echo "hay un error en su datos acceso";
}
    
}

?>