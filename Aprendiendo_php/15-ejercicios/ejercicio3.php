<?php

/**
 * Programa que compruebe si una variable esta vacia y si esta vacia, rellenarla con texto
 * en minusculas y mostrarlo en mayusculas y en negrita.
 */

if(isset($_GET['variable'])){
    $variable = $_GET['variable'];

    if(empty($variable)){
        $variable = 'adrian es un hermoso';
        echo '<b>'.strtoupper($variable).'</b>';
    }else{
        echo $variable;
    }
}else{
    echo '<h2> No hay nada por metodo GET </h2>';
}