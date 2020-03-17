<?php

//repasado

if(isset($_GET['numero'])){
    $numero = $_GET['numero'];
    echo "<h1>Tabla del numero $numero</h1>";

    $contador = 0;
    while ($contador <= 10){
        echo "$numero X $contador = ".($numero*$contador)." <br>";
        $contador++;
    }
}