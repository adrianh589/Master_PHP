<?php

class Persona
{
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre, $edad, $ciudad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }
    //Esta funcion imita a los getters de un metodo
    public function __call($name, $arguments)//En caso de que no exista un metodo, este metodo se ejecutara en su lugar
    {
        $prefix_metodo = substr($name, 0, 3);
        var_dump($arguments);

        if ($prefix_metodo == 'get') {
            $nombre_metodo = substr(strtolower($name), 3);

            if (!isset($this->$nombre_metodo)) {//Si no existe el atributo del objeto
                return "El metodo no existe;";
            }
            return $this->$nombre_metodo;//Si existe retorna esa proppiedad

        }else{//Si no empieza por get entonces No exite
            return "No existe el metodo";
        }

    }
}

$persona = new Persona("Adrian", 23, "Bogotá");
echo $persona->getNombre();
echo $persona->getCiudad();
