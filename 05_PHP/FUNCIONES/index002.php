<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>

</head>
<body>

<!-- Formulario index.php (nombre,edad,sueldo)
salario.php muestra los datos y 
* si falta alguno muestra "faltan datos"
* si edad <18 mostrar "no es una edad valida"
* si el sueldo >40.000 mostrar "cambien valor de las retribuciones"
-->

<form action="salario.php" method="POST" >
    <input type="text" id="nombre" name="nombre">
    <input type="text" id="edad" name="edad">
    <input type="text" id="sueldo" name="sueldo">
    
    <input type="submit" id="enviar" name="enviar"> 
</form>



</body>
</html>