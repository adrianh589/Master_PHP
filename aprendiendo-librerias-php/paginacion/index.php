<?php

require_once '../vendor/autoload.php';

//Conexion a la bd
$conexion = new mysqli("localhost", "root", "", "notas_master");
$conexion->query("SET NAMES 'utf8' ");

//Consulta para contar elementos totales
$consulta = $conexion->query("SELECT * FROM notas");
$numero_elementos = $consulta->num_rows;
$numero_elementos_pagina = 2;

//var_dump($numero_elementos);

//Hacer paginacion
$pagination = new Zebra_Pagination();

//Numero total de elementos a paginar
$pagination->records($numero_elementos);

//Numero total de elementos por página
$pagination->records_per_page($numero_elementos_pagina);

//
$page = $pagination->get_page();
$empieza_aqui = ($page - 1) * $numero_elementos_pagina ;
$sql = "SELECT * FROM notas LIMIT $empieza_aqui, $numero_elementos_pagina";
$notas = $conexion->query($sql);

echo '<link rel="stylesheet" href="../vendor/stefangabos/zebra_pagination/public/css/zebra_pagination.css" type="text/css">';

while ( $nota = $notas->fetch_object() ){
    echo "<h1> {$nota->titulo} </h1>";
    echo "<h3> {$nota->descripcion} </h3>";
}

$pagination->render();