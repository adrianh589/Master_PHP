<?php

/*
 * Crear un array con la estructura de la siguiente tabla
 *
   ACCION    AVENTURA    DEPORTES
    GTA      Asassins    FIFA 19
    COD      Crash       PES 19
    PUBG     Prince of   MOTO GP 19
             Persia


Cada columna debe ir en un fichero separado (includes) y representarlo en HTML.
 */

require_once 'includes/aventura.php';
require_once 'includes/accion.php';
require_once 'includes/deportes.php';

$juegos = array($accion, $aventura, $deportes);


$indices = array_keys($juegos);
?>

    <table border="1">
        <tr>
                <th>ACCION</th>
                <th>AVENTURA</th>
                <th>DEPORTES</th>
        </tr>
            <?php for($i = 0; $i < count($juegos); $i++) : ?>
            <tr>
                <?php for($j = 0; $j < count($juegos[$i]); $j++) : ?>
                    <td><?=$juegos[$j][$i];?></td>
                <?php endfor; ?>
            </tr>
            <?php endfor; ?>
    </table>
