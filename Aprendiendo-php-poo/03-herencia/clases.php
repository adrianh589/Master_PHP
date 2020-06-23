<?php

//HERENCIA: Es la posibilidad de compartir atributos y metodos
//entre clases.

/*
 * La herencia dentro de POO nos permite compartir caracteristicas entre clases como por ejemplo
 * metodos y atributos con el fin de repetir el minimo código posible, un caso real seria
 * donde una clase pequeña pueda heredar de una clase grande, donde la pequeña va a tener
 * muchas cosas en comun, sin embargo, habrán pocas cosas que varien o añadidos mas, nos ayuda
 * mucho a optimizar código.
 *
 * En pocas palabras, es duplicar una clase pero sin definir los metodos, de manera que los podemos usar.
 * */

class Persona{

    public string $nombre;
    public string $apellidos;
    public int $altura;
    public int $edad;

    public function hablar(): string
    {
        return "Estoy hablando"; 
    }

    public function caminar(): string
    {
        return "Estoy caminando";
    }

    /*Getters and Setters*/

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function getAltura(): int
    {
        return $this->altura;
    }

    public function setAltura(int $altura): void
    {
        $this->altura = $altura;
    }

    public function getEdad(): int
    {
        return $this->edad;
    }

    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }

}

//Aqui puedo usar los metodos heredados, es decir los de persona
class Informatico extends Persona {

    public $lenguajes;
    public $experienciaInformatico;

    public function __construct()
    {
        $this->lenguajes = "CSS, HTML, JAVA, etc";
        $this->experienciaInformatico = 6;
    }

    public function setLenguajes()
    {
        $this->lenguajes = array("Java","PHP","C#","Python","JavaScript","C++");
    }

    public function sabeLenguajes()
    {
       return $this->lenguajes;
    }

    public function programar(): string
    {
        return "Soy programador";
    }

    public function repararOrdenador(): string
    {
        return "Reperar ordenadores";
    }

    public function ofimatica(): string
    {
        return "Estoy escribiendo en word";
    }
}

class TecnicoRedes extends Informatico {
    public static $auditarRedes;
    public $experienciaRedes;

    public function __construct()
    {
        parent::__construct();//Este doble dos puntos implica acceder de manera estatica a un metodo sin tener que instanciarlo
                                //Ademas, esto me trae los valores que tiene el constructor en la clase padre
        self::$auditarRedes = "experto";
        $this->experienciaRedes = 5;
    }

    public static function imprimirExperiencia(){
        return self::$auditarRedes = "Lo cambie por el estatico";
    }


}

class Daniela extends Persona{

    private $nivelHermosa;
    private $celos;

    public function __construct()
    {
        $this->nombre = "Daniela";
        $this->celos = "Demasiado alto";
    }

}
