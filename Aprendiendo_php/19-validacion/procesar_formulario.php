<?php

$error = "faltan valroes";
if (!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
    //Se uso empty porque esta funcion a pesar de validar de que existe, tambien valida que tenga datos vacios
    //isset solo comprueba que exista pero no comprueba que este vacio

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = $_POST['edad'];
    $email = $_POST['email'];
    $password = $_POST['pass'];

    //validar nombre
    if(!is_string($nombre) || preg_match('/[0-9]/')){ //pregmatch valida si hay un patron establecido, si lo hay retorna true
        $error = "nombre";
    }

    if(!is_string($apellidos) || preg_match('/[0-9]/')){
        $error = "apellidos";
    }

    if(!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)){//filter_var valida si hay filtro, por ejemplo, aca se ev que solo hayan enteros
        $error = "edad";
    }

    if(!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "email";
    }

    if(empty($password) || strlen($password)<5){
        $error = "password";
    }

}else{
    $error = "faltan valroes";
    header("Location: index.php?error=$error");
}

if($error != 'ok'){
    header("Location: index.php?error=$error");
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

    <?php if($error == 'ok')  : ?>
        <h1>Datos validados correctamente</h1>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
        <p><?=$password?></p>
    <?php endif; ?>

</body>
</html>
