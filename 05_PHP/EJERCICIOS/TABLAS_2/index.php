<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA</title>
    <style>
        table { border-collapse: collapse; width: 100%;		}   
        th, td  { border: 1px dashed blue; text-align: center;} 
        input{width:98%; border: 0px;}
    </style>

</head>
<body>

<table>
    <tr style="background-color: black; color: white;">
        <td>NOMBRE</td>
        <td>EMAIL</td>
        <td>TELEFONO</td>
    </tr>    

<?php

$array_datos = 
[
   
   ["nombre"=>"A", "email"=>"a@a.com", "telefono"=>"1"],
   ["nombre"=>"B", "email"=>"b@a.com", "telefono"=>"2"],
   ["nombre"=>"C", "email"=>"c@a.com", "telefono"=>"3"]
   
   
    // Valores de este array seria de este tipo:
    // $array_datos [0]["nombre"];
    // $array_datos [0]["email"];
    // $array_datos [0]["telefono"];
];



foreach ($array_datos as $array_numerico)
{
    echo "<tr>";
    foreach ($array_numerico as $valores_internos)
    {
        echo "<td>$valores_internos</td>";
    }
    echo "</tr>";
}

?>
    
</table>
</body>
</html>