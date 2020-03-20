<?php

//Asi se elimina una cookie, hay que ponerle el mismo nombre y pasarle una fecha vieja
var_dump($_COOKIE);
if (isset($_COOKIE['micookie'])){
    //unset($_COOKIE['micookie']);
    setcookie('micookie', '', time()-100);
}

//Con esto redireccionamos a el indice ver_cookies.php
//header(); es una funcion para modificar las cabeceras, en este caso usaremos Location: para modifiar la URL de
//la página con lo cual me redirecciona a donde yo le especifique.

//var_dump(header());
header('Location: ver_cookies.php');
