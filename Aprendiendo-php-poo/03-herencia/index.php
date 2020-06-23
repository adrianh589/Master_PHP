<?php
require_once 'clases.php';

$persona = new Persona();
$persona->setNombre("Adrian");

$informatico = new Informatico();

//$informatico->setLenguajes();

var_dump($informatico);

$tecnico = new TecnicoRedes();

echo TecnicoRedes::imprimirExperiencia();

var_dump($tecnico);

$daniela = new Daniela();

var_dump($daniela);



