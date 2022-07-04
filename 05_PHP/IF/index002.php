<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    .estrecho {width: 400px; background-color: blue;}
    .ancho {width: 100px; background-color: blue;}
</style>

</head>
<body>


<!-- notacion larga -->
<?php
$control1 = 1;
if($control1 == 1){ 
    $clase1 = "estrecho";
}
else{
    $clase1 = "ancho";
}
?>
<div class="<?php echo $clase1;?>">HOLA CARACOLA</div>


<!-- notacion corta -->
<?php
$control2 = 2;

//    si esta condicion se cumple    vale esto   sino esto
          $clase2 = ($control2 == 2) ? "ancho" : "estrecho";
?>

<div class="<?php echo $clase2;?>">HOLA CARACOLA</div>
    
</body>
</html>