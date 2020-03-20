<?php

$cantantes = ['shakira','carlos vives', 'maluma', 'ozuna', 'sech'];

//ordenar alfabeticamente
sort($cantantes);

//añadir un elemento al array
$cantantes[] = 'Tete';

//Eliminar ultimo elemento del array
array_pop($cantantes);

//Eliminar un elemento especifico del array
unset($cantantes[2]);

//Mostrar un elemento aleatorio de un array
$indice = array_rand($cantantes);
echo $cantantes[$indice];

//Darle la vuelta, reversa
$nums = [1,2,3,4,5,6,7,8];
var_dump(array_reverse($nums));

var_dump($cantantes);


