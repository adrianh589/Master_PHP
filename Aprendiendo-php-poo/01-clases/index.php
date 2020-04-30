<?php
//Programacion Orientada a Objetos en PHP (POO)

//Definir una clase molde para crear mas objetos de tipo coche con caracteristicas
//parecidas
class Coche{

    //atributos o propiedades
    public $color = "rojo";
    public $modelo = "enzo";
    public $velocidad = 300;
    public $marca = "ferrari";
    public $caballaje = 500;
    public $plazas = 2;

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


}//Fin definicion de la clase

//Crear un objeto o instanciar la clase
$coche = new Coche();
echo $coche->getColor();

$coche->setColor("verde");
echo "El color es: ".$coche->color;

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();

echo $coche->getVelocidad();
