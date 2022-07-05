<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array asociativo doble</title>
</head>
<body>

<?php
    
$array_asociativo_doble = [
    "persona001" => ["nombre" => "juan",
                     "apellidos" => "garcia",
                     "edad" => 50,
                     "email" => "a@gmail.com"
                     ],
    "persona002" => ["nombre" => "antonio",
                     "apellidos" => "garcia",
                     "edad" => 51,
                     "email" => "b@gmail.com"
                     ],
    "persona003" => ["nombre" => "maria",
                     "apellidos" => "garcia",
                     "edad" => 52,
                     "email" => "c@gmail.com"
                     ],
    "persona004" => ["nombre" => "eva",
                     "apellidos" => "garcia",
                     "edad" => 53,
                     "email" => "d@gmail.com"
                     ]
    ];
    
    // Este codigo recorre array principal $array_asociativo_doble ..y toma valores key y lo guarda en un valor 
    // Con esto nos da persona001, persona002, ....
    foreach ($array_asociativo_doble as $key_array_array_asociativo_doble => $clave_array_array_asociativo_doble){
        echo "<br>";
        // ahora necesitamos guardar los datos interiores nombre, apellidos,...
        foreach ($clave_array_array_asociativo_doble as $key_interior => $valores_interior){
        echo "$key_interior : $valores_interior <br>";
            
            // imaginemos queremos imprimir solo correo electronico personas
            // echo "$valores_interior[4];
        }
    
    }
    
?>
    
</body>
</html>
