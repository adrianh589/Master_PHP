<?php

namespace MisClases;

class Usuario
{

    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Adrian Hoyos";
        $this->email = "adrianh_589@hotmail.com";
    }

}