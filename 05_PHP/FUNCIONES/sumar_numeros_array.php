<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media php</title>
</head>
<body>

<!-- 
calcular media aritmetica de un array numeros indeterminados 
EN JAVASCRIPT 

<script>
        function calcular_media(mi_array){
    
	        suma = 0;
	
	for(contador = 0; contador < mi_array.length; contador++){
	suma = suma + mi_array[contador];
    
    }
	
	media = suma/mi_array.length;
	return media;
	}
	
</script>

<script>
mi_array = [1,2,3,4,5,6,7,8,9,10]
media = calcular_media(mi_array)
document.write(media)
</script>

-->

<?php
// METODO CON FOR
function calculo_media_1($numeros01){
      
    $longitudarray = count($numeros01);   // equivale en javascript   mi_array.length
    $suma = 0;
    
for ($contador = 0; $contador < $longitudarray; $contador++){
        $suma = $suma + $numeros01[$contador];
    }
        $media = $suma / $longitudarray;
        return $media;

}

// llamo a la funcion 
$numeros01 = [1,2,3,4,5,6,7,8,9,10];
echo calculo_media_1($numeros01);
?>

<br>

<?php 
// METODO FOREACH

function calculo_media_2($numeros2){
    $longitudarray = count($numeros2);
    $suma = 0;
    
    foreach ($numeros2 as $valornumero) {
        $suma = $suma + $valornumero;
    }
    $media = $suma / $longitudarray;
    return $media;
}

// llamo a la funcion 
$numeros2 = [1,2,3,4,5,6,7,8,9,10];
echo calculo_media_2($numeros2);
?>

</body>
</html>