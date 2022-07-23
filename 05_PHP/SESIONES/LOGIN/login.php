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
        
        <!-- 
            isset = si existe (variable session usuario)... haz esto: 
                a) imprime bienvenido usuario 
                b) imprime boton Logout  
        --> 
        <?php if(isset($_SESSION["usuario"])) 
        {
            echo "Bienvenido: ";
            echo $_SESSION["usuario"];
            
            echo "<br>";
            
            ?>

            <!-- link logout lo que hace es cargar php destruir sesion -->
            <a href="

                <?php 
                session_destroy();
                ?>
                       
            ">LOGOUT</a>


            <?php

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

<?php incluide 'session.php' ?>
    
</body>
</html>
