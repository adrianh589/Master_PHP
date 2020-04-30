<?php

/*
 * Un trait nos permite definir una serie de metodos para compartirlos
 * entre diferentes clases.
 */

trait Utilidades{
    public function mostrarNombre()
    {
        echo "<h1>El nombre es: $this->nombre </h1>";
    }
}

class Coche {
    public $nombre;
    public $marca;
    use Utilidades;//Asi llamamos al trait, es como traernos todos los metodos del trait
}

class Persona {
    public $nombre;
    public $apellidos;
}

class Videojuegos {
    public $nombre;
    public $anio;
}

$coche = new Coche();
$coche->nombre = "Lamborghini";

$persona = new Persona();

$videojuego = new Videojuegos();

$coche->mostrarNombre();
var_dump($coche);


