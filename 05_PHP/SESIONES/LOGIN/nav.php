<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Hidden brand</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    
    
    <!-- codigo original bootstrap 4 
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    -->

    <!-- INICIO FORMULARIO LOGIN -->
        <!-- 
            isset = si existe (variable session usuario)... haz esto: 
                a) imprime bienvenido usuario 
                b) imprime boton Logout  
        --> 
        <?php if(isset($_SESSION["usuario"])) 
        {
            echo "Bienvenido : " .$_SESSION['usuario']. ""; 
            
            ?>

            <!-- link logout lo que hace es cargar php destruir sesion -->
            <a href=" <?php session_destroy(); ?> ">LOGOUT</a>

            <?php

        }
        else
        // en caso no exista variable sesion usuario... imprimir formulario login
        { 
            ?>
            
            <form class="form-inline my-2 my-lg-0" action="index.php" method="POST" autocomplete="off">
            
            <input class="form-control mr-sm-2" placeholder="Escribir aqui user" aria-label="usuario" type="text" id="usuario" name="usuario">
            
            <input class="form-control mr-sm-2" placeholder="Escribir aqui 1234" aria-label="password" type="text" id="password" name="password">
                       
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="enviar" name="enviar">LOGIN</button>
            </form>
            
            <?php


        }


        ?>

        <!-- fin isset -->
    <!-- FIN FORMULARIO LOGIN --> 

 
    </div>
</nav>
