<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla</title>
<style>
    td{border: 1px solid black; width: 50px; height: 50px;}
    </style>

</head>
<body>
    
<!-- hacer una tabla donde tu le das variable filas y 1 columna -->

<?php 
function tabla($filas){

    echo "<table>";
    echo "<tr>";
    
    for ($contador = 0 ; $contador < $filas; $contador++){
                echo "<td> *****texto*****";
                echo "</td>";
        }   
        
    echo "</tr>";
    echo "</table>";
    
}

tabla(5);
    
?>

</body>
</html>