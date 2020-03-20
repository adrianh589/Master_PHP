<?php

/**
 * introducir valoresa un array mientras que su longitud sea menor a 120
 */

$array = array();

$contador = 1;
while (count($array)<120){
    array_push($array, $contador);
    $contador++;
}

foreach ($array as $valor){
    echo "$valor <br>";
}

var_dump($array);
