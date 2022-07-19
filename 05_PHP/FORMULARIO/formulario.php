<form id="formulario-contacto" name="formulario-contacto" method="POST" action="resumen.php">  
    
<fieldset id="tipo_vivienda">    
<!-- <legend>TIPO VIVIENDA</legend>  -->   
<label for="tipo_vivienda">Tipo Vivienda:</label> 
<select id="tipo_vivienda" name="tipo_vivienda">
<option value="-1">Elija una opción</option>
<option value="adosado">Adosado</option>
<option value="unifamiliar">Unifamiliar</option>
<option value="piso">Piso</option>
</select>
</fieldset>       


<fieldset id="zona_ciudad">   
<!-- <legend>ZONA CIUDAD</legend>  -->   
<label for="zona_ciudad">Zona Ciudad</label> 
<select id="zona_ciudad" name="zona_ciudad">
<option value="-1">Elija una opción</option>
<option value="centro">Centro</option>
<option value="periferia">Periferia</option>
</select>
</fieldset>  


<fieldset id="numero_habitaciones">   
<!-- <legend>NUMERO HABITACIONES</legend>  -->   
<label for="n_habitaciones_01"><input type="radio" id="n_habitaciones_01" name="n_habitaciones" value="1" checked> 1 HABITACION </label>
<label for="n_habitaciones_02"><input type="radio" id="n_habitaciones_02" name="n_habitaciones" value="2"> 2 HABITACION </label>   
<label for="n_habitaciones_03"><input type="radio" id="n_habitaciones_03" name="n_habitaciones" value="3"> 3 HABITACION </label>
</fieldset>    
 

<fieldset id="precio">
<!-- <legend>PRECIO VIVIENDA</legend>  -->   
<label for="nombre">Precio:</label><input type="text" id="precio" name="precio" placeholder="Escriba aqui precio deseado">
</fieldset>                   
  
<fieldset id="metros">
<!-- <legend>METROS VIVIENDA</legend>  -->   
<label for="metros">Metros:</label><input type="number" id="metros" name="metros" step="10" min="0" max="1500" placeholder="Escriba aqui metros cuadrados deseados">
</fieldset>   


<H3>EXTRAS</H3>

<fieldset id="extras">
<!-- <legend>EXTRAS</legend> -->
<label for="extras001"><input type="checkbox" id="extras001" name="extras001" value="garaje" checked/>  GARAJE </label>
<label for="extraso002"><input type="checkbox" id="extras002" name="extras002" value="trastero"/>  TRASTERO </label>
<label for="extras003"><input type="checkbox" id="extras003" name="extras003" value="pìscina"/> PISCINA </label>
</fieldset>

<fieldset id="textarea">
<!-- <legend>TEXTAREA</legend> -->
<label for="observaciones">Observaciones</label><textarea name="observaciones" rows="10" cols="50"></textarea>
</fieldset>


<fieldset id="enviar">
<!-- <legend>ENVIAR</legend> --> 
<input type="submit" name="boton_enviar" id="boton_enviar" value="Enviar" >
<input type="reset" name="boton_borrar" id="boton_borrar" value="Borrar" >
</fieldset>
      
</form>  