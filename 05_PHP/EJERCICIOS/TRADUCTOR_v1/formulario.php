<form id="formulario" name="formulario" method="POST" action="">  
<select id="idioma" name="idioma">
<option value="-1">Elija una opción</option>
<option value="es">ESPAÑOL</option>
<option value="en">INGLES</option>
</select>
<input type="submit" name="boton_enviar" id="boton_enviar" value="TRADUCIR" >
<form>

<?php
if($_POST)
{
  $idioma = $_POST["idioma"];  

switch ("$idioma"){
    case "es": 
        header ('Location: ./index_es.php');        
        break;
    
    case "en": 
        header ('Location: ./index_en.php');
        break;
    
    case "-1": "Seleccionar un idioma";
    break;
    
}
}
else{}
?>