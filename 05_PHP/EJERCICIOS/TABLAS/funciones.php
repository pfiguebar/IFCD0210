<?php
if($_POST)
{
    // variables tomadas de inputs
 $n_producto001 = $_POST["producto001"];         
 $n_producto002 = $_POST["producto002"];
 $n_producto003 = $_POST["producto003"];
}

    // funciones calcular
function calcular_barrapan($n_producto001){
    $p_producto001 = 1;
    $sub_producto001 = $n_producto001 * $p_producto001;
    return $sub_producto001;
    
}

function calcular_croisant($n_producto002){
    $p_producto002 = 3/2;
    $sub_producto002 = $n_producto002 * $p_producto002;
    return $sub_producto002;
    
}

function calcular_napolitana($n_producto003){
    $p_producto003 = 2;
    $sub_producto003 = $n_producto003 * $p_producto003;
    return $sub_producto003;
    
    
}

?>   
