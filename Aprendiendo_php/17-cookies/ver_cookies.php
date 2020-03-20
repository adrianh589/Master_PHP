<?php

//Variable para mostrar el valor de las cookies, que es una variable superglobal, y es un array asociativo
var_dump($_COOKIE);

if(isset($_COOKIE['micookie'])){
    $cookie = $_COOKIE['micookie'];
    echo "<h3> $cookie </h3>";
}else{
    echo 'No existe la cookie';
}

?>

<a href="borrar_cookies.php">Eliminar mi cookie</a>

/**
 * Tambien la podemos ver en el navegador ingresando en el apartado de Aplicacion -> ver Cookies.
 *
 * LAs cookies se guardan como ficheros en el navegador, y este fichero se lo envia al servidor
 * cada vez que cargamos la web y una ve que le llega al servidor se hace lo que se necesite con la cookie.
 */