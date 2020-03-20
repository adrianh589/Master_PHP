<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validacion de formularios</title>
</head>
<body>

    <h1>Validar formularios en PHP</h1>

    <?php
        if(isset($_GET['error'])){
            $error = $_GET['error'];
            if($error == "faltan valroes"){
                echo "<strong style='color: red;'>Introduce todos los campos del formularios</strong>";
            }
            if($error == "nombre"){
                echo "<strong style='color: red;'>Introduce bien el nombre</strong>";
            }
            if($error == "apellidos"){
                echo "<strong style='color: red;'>Introduce bien los apellidos</strong>";
            }
            if($error == "edad"){
                echo "<strong style='color: red;'>Introduce bien la edad</strong>";
            }
            if($error == "email"){
                echo "<strong style='color: red;'>Introduce bien el email</strong>";
            }
            if($error == "password"){
                echo "<strong style='color: red;'>Introduce bien la contraseña, recuerda que debe ser mayor a 5 caracteres</strong>";
            }
        }
    ?>


    <form method="post" action="procesar_formulario.php">

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required pattern="[A-Za-z]+"><br/> <!-- El pattern indica los simbolos que acepta este campo -->

        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos" required pattern="[A-Za-z]+"><br/>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required pattern="[0-9]+"><br/> <!-- El + indica que lo puedo hacer un numero indefinido de veces -->

        <label for="email">Email:</label>
        <input type="email" name="email" required> <br/>

        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" required> <br/>

        <input type="submit">

    </form>

</body>
</html>