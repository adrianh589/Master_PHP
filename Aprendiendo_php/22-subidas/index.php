<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi subida de archivos</title>
</head>
<body>
<h1>Subir imagenes en PHP</h1>

    <form method="post" action="upload.php" enctype="multipart/form-data"> <!-- importatnte el enctype para subir lso archivos -->

        <input type="file" name="archivo">

        <input type="submit" value="Enviar">
    </form>

    <h1>Listado de imágenes</h1>
<?php
$gestor = opendir('images') or die("Paila no se pudo abrir la carpeta");

if($gestor) :
    while ( $image = readdir($gestor) ) :
        echo "<img src='images/$image' alt='imagen no encontrada' >";
    endwhile;
endif;
?>

<!-- En la vista es importante evitar el uso de llaves para evitar perdida a nivel de codigo, ver que abre y que cierra realmente SOLO EN LAS VISTAS -->

</body>
</html>
