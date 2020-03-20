<?php
/*
    //Abrir archivo
    $archivo = fopen("fichero_texto.txt", "a+");//a+ es todos los permisos como en linux

    //Leer contenido
    while (!feof($archivo)) {//Comprueba que NO este al final del archivo
        //Leer contenido
        $contenido = fgets($archivo);
        echo $contenido . "</br>";
    }

    //Escribir en el archivo
    fwrite($archivo, "Quise escribir esto");

    //Cerrar archivo
    fclose($archivo);
*/

//Copiar un fichero
//copy('fichero_texto.txt', 'fichero_copiado.txt') or die("Error al copiar");//El or die significa que me muestre algo cuando no ejecute

//Renombrar un fichero
//rename('fichero_copiado.txt', 'lonombreyo.dock');

//Eliminar un fichero
//unlink('lonombreyo.dock') || die("Error al borrar");//die aplica cuando falla una sentencia y termina el script

//Verificar que exista un fichero
if(file_exists("fichero_texto.txt")){
    echo "<h1> El fichero existe </h1>";
}else{
    echo "El fichero no existe";
}
?>
