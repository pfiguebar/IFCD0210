<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOR</title>

</head>
<body>

<!-- crear el siguiente array
$auto = ["Ford", "Seat", Bmw", Renault"]
1) mostrar en pantalla cada marca dentro un <p> usando for
2) idem usando foreach
-->


<?php
$auto1 = ["0"=>"Ford", "1"=>"Seat", "2"=>"Bmw", "3"=>"Renault"];

for ($contador = 0; $contador < count($auto); $contador ++){  
    echo "<p>$auto1[$contador]</p>"; 
}
?>


<br>

<?php
$auto2 = ["0"=>"Ford", "1"=>"Seat", "2"=>"Bmw", "3"=>"Renault"];

foreach ($auto2 as $indice => $marca){  
    echo "<p> $marca </p>"; 
}
?>

</body>
</html>