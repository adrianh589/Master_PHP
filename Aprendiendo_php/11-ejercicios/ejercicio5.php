<?php
/**
 * Hacer un programa que meustre todos los valores entre 2 numeros (incluidos ambos), y que lleguen por la URL
 */

if( isset($_GET['numero1']) && isset($_GET['numero2']) ) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "<h1>Los numeros entre $numero1 y $numero2 son:</h1>";

    for ($i = $numero1; $i <= $numero2; $i++){
        echo $i."<br>";
    }
}

?>
