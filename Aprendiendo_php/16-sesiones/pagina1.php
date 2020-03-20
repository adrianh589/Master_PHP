<?php

/**
 * Es obligatorio usar la funcion session_start(); en cualquier fichero de PHP en el que vayamos a manipular
 * sesiones.
 *
 * En este fichero PHP se observa que podemos usar
 */

session_start();

echo $_SESSION['variable_persistente'];
