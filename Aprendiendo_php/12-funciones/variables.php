<?php
/**
 * Variable locales y globales
 *
 * al mk php hay que establecerle global para acceder a una bariable fuera de la funcion
 */

$nombre = 'Adrian Hoyos';

function imprimeNombre(){
    global $nombre;//Establecemos global para acceder a la variable externa
}


    /**
     * Funciones Variables
     */

    function buenosDias(){
        return "good Morning";
    }

    function buenasTardes(){
        return "good Afternoon";
    }

    function buenasNoches(){
        return "good Evening";
    }

    $horario = "buenasNoches";
    echo $horario();

?>
