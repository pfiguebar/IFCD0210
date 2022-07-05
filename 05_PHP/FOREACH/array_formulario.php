<!-- tenemos este codigo en formulario.html 
<form id="formulario-pagina-contacto" name="formulario-corto-contacto" method="POST" action="form.php">  
<input type="text" id="nombre" name="nombre" placeholder="Escriba su nombre en este cuadro" required>  // supongamos usuario escribe Juan
<input type="text" id="apellidos" name="apellidos" placeholder="Escriba su nombre en este cuadro">     // Supongamos usuario escribe Garcia
<input type="button" name="boton_enviar" id="boton_enviar" value="Enviar" >
</form> 
--> 


<!-- tenemos otro archivo se llama form.php  que es llamado cuando se pulsa boton enviar -->
<!-- si dejamos en blanco action ...  se realiza en el mismo archivo ... tendriamos que escribir codigo dentro archivo formulario.html

<!-- Normalmente boton enviar es type="button" -->
<!-- tiene asociado un listener que llama funcion comprobar. Si todo esta correcto ejecuta submit()... que llama archivo action=""  -->



<?php 
var_dump($_POST);
?>

<!-- esto nos crea un array asociativo llamado $_POST (esto es siempre asi)  cuyas key son los name de los input -->
<!-- saldria algo que asi -->

<!--              esto es name input       esto es lo que escribe usuario 
<!-- array(2) = ["nombre"              => "Juan"                                , "apellidos" => "Garcia"] -->


