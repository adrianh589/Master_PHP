<?php

namespace MisClases;
class Categoria
{
    public $nombre;
    public $descripcion;

    public function __construct()
    {
        $this->nombre = "Accion";
        $this->descripcion = "Categoria enfocada a las reviws de vidojuegos de accion";
    }

}