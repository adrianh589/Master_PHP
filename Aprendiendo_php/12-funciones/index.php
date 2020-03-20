<?php

    echo calculadora(5,3);

    function muestraNombres(){
        echo 'Adrian Hoyos <br>';
        echo 'Daniela Diaz <br>';
        echo 'Camila Hoyos <br>';
        echo 'Yaneth Hoyos';
    }

    function calculadora($numero1, $numero2){
        $texto = "";
        $texto .= suma($numero1,$numero2)."<br>".
        resta($numero1, $numero2)."<br>".
        multiplicacion($numero1, $numero2)."<br>".
        division($numero1, $numero2)."<br>";
        return $texto;
    }

    function suma($numero1, $numero2){
        return $numero1 + $numero2;
    }

    function resta($numero1, $numero2){
        return $numero1 - $numero2;
    }

    function multiplicacion($numero1, $numero2){
        return $numero1 * $numero2;
    }

    function division($numero1, $numero2){
        return $numero1 / $numero2;
    }


?>