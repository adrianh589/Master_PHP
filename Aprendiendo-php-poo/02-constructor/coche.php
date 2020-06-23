<?php
//Programacion Orientada a Objetos en PHP (POO)

//Definir una clase molde para crear mas objetos de tipo coche con caracteristicas
//parecidas
class Coche{

    //atributos o propiedades

    //PUBLIC: Se puede acceder desde cualquier lugar
    public $color;

    //PROTECTED: Podemos acceder desde la clase que lo define
    //y desde las clases que hereden esta clase
    protected $modelo;

    //PRIVATE: unicamente se puede acceder desde esta clase
    private $velocidad;
    public $marca;
    public $caballaje;
    public $plazas;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas){
        $this->color = $color;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->marca = $marca;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

    //Métodos , con acciones que hace un objeto (antes funciones)
    public function getColor(){
        //Busca en esta clase la propiedad X
        return $this->color;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function acelerar(){
        $this->velocidad ++;
    }

    public function frenar(){
        $this->velocidad --;
    }

    public function getVelocidad(): int
    {
        return $this->velocidad;
    }

    //Imprimir la informacion de un coche
    public function mostrarInformacion(Coche $miobjeto): string{
        $informacion = "<h1>Informacion del coche</h1>
                        Modelo: $miobjeto->modelo <br>
                        Marca: $miobjeto->marca<br>
                        Velocidad: $miobjeto->velocidad<br>
                        Plazas: $miobjeto->plazas
                        ";
        return $informacion;
    }

}//Fin definicion de la clase

