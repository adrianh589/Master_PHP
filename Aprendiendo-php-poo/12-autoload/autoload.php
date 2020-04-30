<?php

function autocargar_clases($class) {
    $arreglar = str_replace("\\","/", $class);
    require 'clases/' . $arreglar . '.php';
}

spl_autoload_register('autocargar_clases');
