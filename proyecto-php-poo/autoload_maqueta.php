<?php

function controller_autoload($class) {
    $arreglar = str_replace("\\","/", $class);
    require 'controllers/' . $arreglar . '.php';
}


spl_autoload_register('controller_autoload');