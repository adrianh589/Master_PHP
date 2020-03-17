<?php

$cantantes = ['shakira','carlos vives', 'maluma', 'ozuna', 'sech'];

echo '<ul>';

foreach ($cantantes as $key => $valor){
    echo "<li>$valor Esta en la posicion $key</li>"; //Key se refiere al indice del array y valor del contenido de ese indice
                                                     //y la primera variable indica sobre el array en el que tiene que iterar
}

echo '<ul>';

/**
 * Arrays asociativos
 */

$persona = [
    'nombre' => 'Adrian',
    'apellido' => 'Hoyos',
    'edad' => 23
];

foreach ($persona as $indice => $contenido){
    echo "$indice = $contenido <br>";
}

var_dump($persona);

echo $persona['nombre'];

/**
 * Array multidimensionales
 */

echo '<hr>';

$contactos = array(
    ['nombre' => 'Adrian', 'apellido' => 'Hoyos', 'edad' => 23],
    ['nombre' => 'Juan', 'apellido' => 'Márquez', 'edad' => 29],
    ['nombre' => 'Pedro', 'apellido' => 'Hoyos', 'edad' => 35]
);

var_dump($contactos);

phpinfo();