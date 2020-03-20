<?php

/**
 * Las sesiones sirven para persisstir la informacion mientras el usuario está navegando
 * y poder compartir datos entre todas las páginas de nuestra aplciación que estemos desarrollando.
 * Estara activa hasta que el usuario cierre el navegador o se cierre la sesion.
 *
 * Las sesiones son seguras debido a que se guardan SOLO en el lado del servidor, es invisible a los clientes y
 * a JavaScript
 *
 * Las sesiones solo se usan en la pagina de MI dominio
 *
 * Ventajas:
 * Unicamente se modifican en el lado del servidor
 *
 * Desventajas:
 * Al cerrar el navegador la sesion desaparece.
 */

//Iniciar la session
session_start();

//Variable local
$variable_normal = "Soy una cadena de texto";

//variable de session
$_SESSION['variable_persistente'] = "Hola soy una sesion activa";

var_dump($_SESSION);

