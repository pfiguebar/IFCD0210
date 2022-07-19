<form id="formulario-factura" name="formulario-factura" method="POST" action="resumen.php">  

<fieldset id="factura"> 
<label>BASE</label>
<input type="text" id="base" name="base">
</fieldset>

<fieldset id="estado">   
<label for="estado">Estado</label> 
<select id="estado" name="estado">
<option value="-1">Elija una opción</option>
<option value="SI">SI</option>
<option value="NO">NO</option>
</select>
</fieldset>  



<input type="submit" name="boton_enviar" id="boton_enviar" value="Enviar" >
<form>