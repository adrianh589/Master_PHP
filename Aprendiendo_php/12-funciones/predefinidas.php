<?php

$nombre = 'Adrian Hoyos';

//funcion para debuggear
var_dump($nombre);

//Fechas
echo date('d-m-y');
echo '<br>';
echo time();
echo '<br>';

//Funciones matematicas
echo 'redondear: '.round(2.95, 1);

echo '<br>';

//Funciones String
$nombreEspaciado = "               Juean            ";
echo trim($nombreEspaciado);
var_dump($nombreEspaciado);

echo '<br>';

//Eliminar variable
$year = 2020;
unset($year);
var_dump($year);
