<?php

/*
    Ejercicio 2
    1. Debe tener una funcion
    2. La funcion debe valdiar un email con FILTER_VAR
    3. Recoger una variable por get y validarla
    4. Mostrar el resultado
 */

if(isset($_GET['campoEmail'])){
    $status = validarEmail($_GET['campoEmail']);
    echo "<h3> Email $status </h3>";
}

function validarEmail($email){
    $status = "No valido";
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $status = "Validado";
    }
    return $status;
}

?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form method="get">
        <label for="campoEmail">Email:</label>
        <input type="text" name="campoEmail" placeholder="Introduzca el email">
        <input type="submit" value="Mandar Email">
    </form>

</body>
</html>
