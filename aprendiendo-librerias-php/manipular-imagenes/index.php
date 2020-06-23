<?php

require_once '../vendor/autoload.php';

$foto_original = 'caballo.jpg';

$guardar_en = 'fotomod.png';

$thumb = new PHPThumb\GD($foto_original);
ob_clean();//Limpiamos el buffer de la memoria porque si no se pone da error, falta de actualizaciones de la libreria

//Redimensionar imagen
$thumb->resize(700, 700);

//Recortar
$thumb->crop(250, 250, 120, 120);

//Recortar a partir del centrp
//$thumb->cropFromCenter(100);

$thumb->show();
$thumb->save($guardar_en);