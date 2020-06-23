<?php

/*Un modelo representa un registro de la base de datos, en el controlador
yo llamo a los modelos para que me den esa informacion de la base de datos y hacer sus acciones*/

class Categoria{

    private $id;
    private $nombre;
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): void
    {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function getOne(){
        $sql = "SELECT * FROM CATEGORIAS WHERE id = {$this->getId()};";
        $categoria = $this->db->query($sql);
        return $categoria->fetch_object();
    }

    public function getAll(){
        $categorias = $this->db->query("SELECT * FROM CATEGORIAS ORDER BY id DESC ");
        return $categorias;
    }

    public function save(){
        $sql = "INSERT INTO CATEGORIAS VALUES (NULL, '{$this->getNombre()}' );";
        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }


}