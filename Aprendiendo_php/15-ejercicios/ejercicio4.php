<?php

/*
 * Crear un script que tenga 4 variables, uan de tipo array, otra string, otra int
 * y por ultimo una de tipo booleanay que imprima un mensajesegun el tipo de variable
 * que sea.
 */

$array = array();
$string = "";
$int = 2;
$booleana = true;

imprime($array);
imprime($string);
imprime($int);
imprime($booleana);

function imprime($variable)
{

    $variable = gettype($variable);
    var_dump($variable);
    switch ($variable) {
        case 'array':
            echo "soy una variable de tipo $variable";
            break;
        case 'string':
            echo "soy una variable de tipo $variable";
            break;
        case 'boolean':
            echo "soy una variable de tipo $variable";
            break;
        case 'integer':
            echo "soy una variable de tipo $variable";
            break;
    }
}