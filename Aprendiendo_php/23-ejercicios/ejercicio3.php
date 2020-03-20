<?php

/*
 Ejercicio 3: Hacer una interfaz de usuario (formulario) con 2 inputs y 4 botones
 uno para sumar restar multiplicar y dividir, y que nos muestre el resultado por pantalla.
 */

$resultado = 0;

if( isset($_POST['numero1']) && isset($_POST['numero2']) ){

    $n1 = $_POST['numero1'];
    $n2 = $_POST['numero2'];

    if(isset($_POST['sumar'])){
        $resultado = 'El resultado es: '.($n1 + $n2);
    }

    elseif (isset($_POST['restar'])){
        $resultado = 'El resultado es: '.($n1 - $n2);
    }

    elseif (isset($_POST['multiplicar'])){
        $resultado = 'El resultado es: '.($n1 * $n2);
    }

    elseif (isset($_POST['dividir'])){
        $resultado = ($_POST['numero2'] == 0) ? "No se puede dividir por 0" : ($n1 / $n2) ;
    }


}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora en php</h1>
    <form method="post">
        <p>
            <label for="numero1">Numero 1</label>
            <input type="number" name="numero1">

            <label for="numero2">Numero 2</label>
            <input type="number" name="numero2">

            <br>

            <label>Resultado: <?= $resultado ?> </label>
        </p>

        <p>
            <input type="submit" value="Sumar" name="sumar">
            <input type="submit" value="Restar" name="restar">
            <input type="submit" value="Multiplicar" name="multiplicar">
            <input type="submit" value="Dividir" name="dividir">
        </p>
    </form>
</body>
</html>