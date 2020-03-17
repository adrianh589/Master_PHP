<?php
    $color="rojo";


    if($color == "verde"){
        echo 'El color es verde';
    }else{
        echo 'El color NO es verde';
    }

    //Ya esta repasado

    $booleano = true;

    if($booleano){
        echo "Entre wiii";
    }

    //Go to va hacia el marcador que uno le deje, omitiendo tantas lineas de codigo com osea necesario para encontrarla
    goto marca;

    echo '<h1>Instruccion 1</h1>';
    echo '<h1>Instruccion 2</h1>';
    echo '<h1>Instruccion 3</h1>';
    echo '<h1>Instruccion 4</h1>';

    marca:
    echo 'me eh saltado 4 echos';

?>
