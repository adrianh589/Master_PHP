<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>

    <?php var_dump($_POST); ?>

    <form action="" method="post" enctype="multipart/form-data">

        <label for="nombre">Nombre:</label>
        <p><input type="text" name="nombre"> </p> <!-- Name hace referencia a la variable que recogere en el servidor, por ejemplo $_POST['nombre'] -->

        <label for="apellido">Apellido:</label><!-- El for se le añade para indicar a que input le pertenece -->
        <p><input type="text" name="apellido" pattern="[A-Z ]+"></p> <!-- El pattern establece que letras peude aceptar este campo -->

        <label for="boton">Botón</label>
        <p><input type="button" name="boton" value="Clickeame"></p>

        <label for="sexo">Sexo</label>
        <p>
            Hombre <input type="checkbox" name="sexo" value="Hombre" checked>
            Mujer <input type="checkbox" name="sexo" value="Mujer">
        </p>

        <label for="date">Date</label>
        <p><input type="date" name="date"></p>

        <label for="archivo">Email</label>
        <p><input type="file" name="archivo" multiple></p> <!-- E atributo multiple para poder seleccionar varios archivos a la vez -->

        <label for="numero">Numero</label>
        <p><input type="Number" name="numero"></p>

        <label for="pass">Contraseña</label>
        <p><input type="password" name="pass"></p>

        <label for="continente">Continente</label>
        <p>
            America: <input type="radio" name="continente">
            Europa: <input type="radio" name="continente">
            Asia: <input type="radio" name="continente">
        </p>

        <label for="url">Página web</label>
        <p><input type="url" name="url"></p>

        <label for="textarea">Página web</label>
        <p><textarea name="textarea"></textarea></p>

        <p>
            <label for="peliculas">Peliculas</label>
            <select name="peliculas">
                <option>Spider Man</option>
                <option>Avengers Infinity War</option>
                <option>Locos de Amor</option>
            </select>
        </p>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
