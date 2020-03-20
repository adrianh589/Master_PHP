<?php

    //Crear una carpeta
    if(!is_dir('mi_carpeta')){
        mkdir("mi_carpeta", 0777) or die("No se pudo crear la carpeta");
        echo "Carpeta creada";
    }else{
        echo "Ya existe la carpeta";
    }

    //Borrar una carpeta
    //rmdir('mi_carpeta');

    echo "<hr>";

    if($gestor = opendir('./')){//Abrimos la carpeta segun el path
        while( ($archivo = readdir($gestor)) !== false ){ // Esta sentencia se aplcia debido a que solo lee una carpeta
            echo $archivo . "<br>";
        }
    }//. Es directorio actual y .. Es directorio anterior

?>