<?php

namespace PanelAdministrador;

class Usuario
{

    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Paco Rodriguez";
        $this->email = "PAc587@hotmail.com";
    }

}