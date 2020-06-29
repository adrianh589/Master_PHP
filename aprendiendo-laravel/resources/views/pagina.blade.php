@extends('layouts.master')

@section('titulo', 'Master en PHP')<!-- Con esto mediante el yield, se agrega esta parte -->

@section('header')
    @parent <!-- Con este parent me traigo lo que tiene la plantill maestra para evitar que se sobreescriba -->
    <h1>Hola</h1> <!-- Con esto si sustuyo el contenido por defecto que tiene la pagina web -->
@stop

@section('content') <!-- Esto es para añadirlo a la pagina maestra, en este caso cambio el content del yiel de la pagina maestra -->
<h1>Contenido de la pagina generica</h1>
@stop
