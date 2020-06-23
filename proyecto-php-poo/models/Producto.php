<?php

/**
 * Class Producto
 * Los modelos son los que interactuan con la base de datos, a su vez
 * tambien se dan sus atributos getters y setters
 */

class Producto{

    private $id;
    private $nombre;
    private $categoria_id;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $imagen;
    private $db;

    public function __construct(){
        $this->db = Database::connect();
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);
        return $this;
    }

    public function getCategoriaId()
    {
        return $this->categoria_id;
    }

    public function setCategoriaId($categoria_id)
    {
        $this->categoria_id = $categoria_id;
        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $this->db->real_escape_string($descripcion);
        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $this->db->real_escape_string($precio);
        return $this;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function setStock($stock)
    {
        $this->stock = $this->db->real_escape_string($stock);
        return $this;
    }

    public function getOferta()
    {
        return $this->oferta;
    }

    public function setOferta($oferta)
    {
        $this->oferta = $this->db->real_escape_string($oferta);
        return $this;
    }

    public function getFecha()
    {
        return $this->fecha;
    }

    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
        return $this;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
        return $this;
    }

    public function getAll(){
        $productos = $this->db->query("SELECT * FROM PRODUCTOS ORDER BY id DESC");
        return $productos;
    }

    public function getAllCategory(){
        $sql = "SELECT p.*, c.nombre AS 'catnombre' FROM PRODUCTOS AS p
                INNER JOIN CATEGORIAS AS c
                ON p.categoria_id = c.id
                WHERE p.categoria_id = {$this->getCategoriaId()};";
        $productos = $this->db->query($sql);
        return $productos;
    }

    public function getOne(){
        $producto = $this->db->query("SELECT * FROM PRODUCTOS WHERE id = {$this->id}");
        return $producto->fetch_object();
    }

    public function getRandom($limit){
        $productos = $this->db->query("SELECT * FROM PRODUCTOS ORDER BY RAND() LIMIT $limit");
        return $productos;
    }

    public function save(){
        Utils::isAdmin();
        if(isset($_POST)){
            $sql = "INSERT INTO PRODUCTOS VALUES (NULL, {$this->getCategoriaId()}, '{$this->getNombre()}', '{$this->getDescripcion()}', {$this->getPrecio()}, {$this->getStock()}, NULL, CURDATE(), '{$this->getImagen()}');";
            $save = $this->db->query($sql);
            $result = false;
            if ($save) {
                $result = true;
            }

            return $result;
        }
    }

    public function edit(){
        Utils::isAdmin();
        if(isset($_POST)){
            $sql = "UPDATE PRODUCTOS SET nombre = '{$this->getNombre()}', descripcion = '{$this->getDescripcion()}', precio = {$this->getPrecio()}, stock = {$this->getStock()}, categoria_id = {$this->getCategoriaId()}";

            if(!empty($this->getImagen())){
                $sql .= ", imagen = '{$this->getImagen()}'";
            }

            $sql .= " WHERE id = {$this->getId()};";

            $save = $this->db->query($sql);
            $result = false;
            if ($save) {
                $result = true;
            }

            return $result;
        }
    }

    public function delete()
    {
        $sql = "DELETE FROM PRODUCTOS WHERE id = {$this->id};";
        $delete = $this->db->query($sql);
        if($delete){
            return true;
        }else{
            return false;
        }
    }

}