<?php

/*
 * El modelo se encarga de crear los modelos
 * en este caso la clase usuario con sus atributos y metodos Getter y Setters
 * */

require_once 'ModeloBase.php';

class Usuario extends ModeloBase {
    public $nombre;
    public $apellidos;
    public $password;

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function getPassword()
    {
        return $this->password;
    }
    
    public function setPassword($password): void
    {
        $this->password = $password;
    }

}