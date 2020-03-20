<?php

/**
 * Hacer un programa con un array que tenga 8 numeros y que haga lo siguiente:
 * -Recorrerlo y mostrarlo
 * -Ordenarlo y mostrarlo
 * -Mostrar su longitud
 * -Buscar algun elemento
 */

$numeros = array(5,9,15,14,23,10,47,14);

echo recorrerYmostrar($numeros);

//Recorrerlo y mostrarlo
function recorrerYmostrar($numeros){
    $texto ="";
    $texto .= '<h1>Recorrerlo y mostrarlo</h1>';

    $texto .= '<ul>';
    foreach ($numeros as $valor){
        $texto .= " <li> $valor </li>";
    }
    $texto .= '</ul> <hr>';
    return $texto;
}

//Fin recorrerlo y mostrarlo


//Ordenarlo y mostrarlo
echo '<h3>Ordenarlo y mostrarlo</h3>';

sort($numeros);

echo '<ul>';
foreach ($numeros as $valor){
    echo " <li> $valor </li>";
}
echo '</ul> <hr>';
//Fin ordenarlo y mostrarlo

//Mostrar su longitud
echo '<h3>Mostrar su longitud</h3>';

echo '<p>'.count($numeros).'</p>';

echo '<hr>';
//Fin mostrar su longitud

//Buscar algun elemento
echo '<h3>buscar algun elemento</h3>';

if(isset($_GET['search'])){
    $search = $_GET['search'];
    echo " El numero $search se encuentra en la posicion ".array_search($search, $numeros);
    var_dump($numeros);
}else{
    echo '<p>No hay ningun parametro en la urL</p>';
}
//Fin buscar algun elemento

