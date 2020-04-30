<?php
require_once 'configuracion.php';

Configuracion::setColor("azul");
Configuracion::setEntorno("LocalHost");
Configuracion::setNewsletter(true);

echo Configuracion::$color . "<br>";        //*****************************************************************
echo Configuracion::$entorno . "<br>";      //  El hacer esto, es como cambiar todo mi molde, es decir
echo Configuracion::$newsletter . "<br>";   //  que a partir de haber modificado lso atributos directamente,
                                            //  todas las instancias tambien tendrán estos valores
                                            //*****************************************************************
$configuracion = new Configuracion();

echo $configuracion::getColor();