
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
   

<form action="" method="POST" >
    <input type="text" id="usuario" name="usuario">
    <input type="text" id="password" name="password">
    
    <input type="submit" id="enviar" name="enviar">
</form>
  
</nav> 
