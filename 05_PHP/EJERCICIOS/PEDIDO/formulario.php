<form id="formulario" name="formulario" method="POST" action="informe.php">  

<div class="container">
<div class="row">
<div class="col-8">
<h2> DATOS </h2>
<fieldset id="datos_cliente"> 
<div class="form-group"><label for="nombre">NOMBRE Y APELLIDOS</label><input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="name" placeholder="Escrieba su nombre"></div>
<div class="form-group"><label for="direccion">DIRECCION</label><input type="text" class="form-control" id="direccion" name="direccion" aria-describedby="direccion" placeholder="Escriba su direccion"></div>
<div class="form-group"><label for="telefono">TELEFONO</label><input type="text" class="form-control" id="telefono" name="telefono" aria-describedby="direccion" placeholder="Escriba su telefono"></div>
</fieldset>
</div>

<div class="col-4">
<h2> PRODUCTOS </h2>
<fieldset id="pedido">   
<div class="form-group"><input type="number" id="patatas" name="patatas"><label for="patatas" value="0" >PATATAS</label></div>
<div class="form-group"><input type="number" id="cebollas" name="cebollas"><label for="cebollas" value="0" >CEBOLLAS</label></div>
<div class="form-group"><input type="number" id="pimientos" name="pimientos"><label for="pimientos" value="0" >PIMIENTOS</label></div>
<div class="form-group"><input type="number" id="huevos" name="huevos"><label for="huevos" value="0" >HUEVOS</label></div>
<div class="form-group"><input type="number" id="manzanas" name="manzanas"><label for="manzanas" value="0" >MANZANAS</label></div>
</fieldset>  
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-8"></div>
<div class="col-4"><input type="submit" name="boton_enviar" id="boton_enviar" value="Enviar" ></div>
</div>
</div>
<form>