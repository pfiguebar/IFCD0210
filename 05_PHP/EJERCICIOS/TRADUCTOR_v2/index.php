<form action="" method="POST">
    <input type="text" name="frase">
<input type="submit" value="traducir">
</form>


<?php
$diccionario = 
[
"lunes"=>"monday",
"manzana"=>"appel",
"dia"=>"day"
];

if($_POST)
{
    // creamos una variable con valor input formulario
    // Ej: $frase = "Hoy es Lunes"
    $frase = $_POST["frase"];

    // PASO 1: todo a minusculas
    // Ej: "hoy es lunes"
    $frase = strtolower($frase);
    
    // PASO 2: descomponer frase en palabras
    // aqui $palabras ya es un array del tipo $palabras = ["hoy", "es", "lunes"]   // var_dump($palabras);
    $palabras = explode(" ", $frase);   
    
        

    // PASO 3: coger cada palabra y buscarla en diccionario
    
    // paso 3.1: le indicamos que array creado $palabras lo separe en value $palabra
    foreach($palabras as $values_palabra)
    {
        // paso 3.2: le indicamos que recorra array diccionario y separe values (español=>ingles) 
        foreach ($diccionario as $values_es => $values_en)
        {
            // paso 4: si la encuentro value $palabra en value $es, cambiarla por value $en
            if($values_palabra == $values_es)
            { 
                $frasefinal = str_replace($values_es, $values_en, $frase); 
            }
        }
    }

    // imprimir 
    echo $frasefinal;   
}

else { echo "esperando..";}
 

?>