<?php

require_once 'ModeloBase.php';

class Nota extends ModeloBase
{

    public $usuario_id;
    public $titulo;
    public $descripcion;

    public function __construct()
    {
        parent::__construct();
    }

    public function getDb(): mysqli
    {
        return $this->db;
    }

    public function setDb(mysqli $db): void
    {
        $this->db = $db;
    }

    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    public function setUsuarioId($usuario_id): void
    {
        $this->usuario_id = $usuario_id;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function guardar()
    {
        $sql = "INSERT INTO notas (usuario_id, titulo, descripcion, fecha) VALUES ({$this->usuario_id}, '{$this->titulo}', '{$this->descripcion}', CURDATE());";
        $guardado = $this->db->query($sql);

        return $guardado;
    }

}