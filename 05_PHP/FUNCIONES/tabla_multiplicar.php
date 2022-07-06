<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- 
funcion que toma un valor e imprime su tabla de multiplicar 
Esto era en Javascript

<script>
        function tabla_multiplicar(tabla){
            var contador = 0;
                         
            for(contador = 0; contador <= 10; contador++){ 
				tabla_calculo = document.write("<p>" + contador + " x " + tabla + "= " + contador * tabla + "</p>");
						}
            
			return tabla_calculo;
				
			}
    </script>
	
	<script>
	tabla_multiplicar(9);
	</script>
....

-->



<?php

function tabla_multiplicar($numero){
    for ($contador = 0; $contador <= 10; $contador++){
            $multiplicacion = $numero * $contador;
            echo "$numero por $contador es $multiplicacion <br>";
              
    }
}

// llamamos funcion dandole valor tabla 5
tabla_multiplicar(5);
?>

</body>
</html>
