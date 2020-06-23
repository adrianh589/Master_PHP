<?php

var_dump($_FILES);

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif" ){

    if(!is_dir("images")){
        mkdir("images", 0777);
    }



    move_uploaded_file($archivo["tmp_name"], "images/".$nombre);//tmp_name hace referencia al propio archivo el cual esta en una carpeta temporal, pero debe ser guardad oe en el servidor en este caso

    header("Refresh: 5; index_maqueta.php");//Redirecciona hasta que pasen 5 segundos a la pagina index_maqueta.php
    echo "<h1> El archivo se cargo correctamente </h1>";

}else{
    echo "<h1>Suba una imagen con un formato correcto porfis</h1>";
    header("Refresh: 5; index_maqueta.php");//Redirecciona hasta que pasen 5 segundo a la pagina index_maqueta.php
}

die();//Recordar que esto corta la ejecucion hasta a aca

//UPLOAD_MAX_FILESIZE
//POST_MAX_SIZE tambien se configura para ver cuanto deberia soportar el metodo post
// se puede configurar para que el servidor aumente su tamaño al poder recibir archivos
//Videos por ejemplo en el archivo php.ini.