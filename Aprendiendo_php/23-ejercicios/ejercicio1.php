<?php

/*
    Ejercicio 1: Crear una sesion que aumente su valor en 1 o disminuya en 1
    en funcion de si el parametro get counter esta a uno o a cero.
 */

session_start();

var_dump($_SESSION);
var_dump($_GET);

if(!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = 0;
}

if(isset($_GET['counter'])) {
    $var = $_GET['counter'];

    if ($var == 1) {
        $_SESSION['numero']++;
    } else if($var == 0){
        $_SESSION['numero']--;
    }
}

?>

<h3>El valor actual de la sesion numero es: <?= $_SESSION['numero'] ?></h3>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a>
