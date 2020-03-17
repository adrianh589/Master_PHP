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
    <h1>Formulario en php</h1>

    <form method="get" action="recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>

        <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido">
        </p>

        <input type="submit" value="Enviar datos">
    </form>

</body>
</html>