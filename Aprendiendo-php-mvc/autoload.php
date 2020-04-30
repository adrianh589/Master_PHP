<?php

function autocargar($class) {
    $arreglar = str_replace("\\","/", $class);
    require 'controllers/' . $arreglar . '.php';
}


spl_autoload_register('autocargar');