<?php

/**
 * Class Pedido
 * Los modelos son los que interactuan con la base de datos, a su vez
 * tambien se dan sus atributos, getters y setters
 */

class Pedido
{

    private $id;
    private $nombre;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $coste;
    private $estado;
    private $fecha;
    private $hora;
    public $db;

    public function __construct()
    {
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
        $this->nombre = $nombre;
        return $this;
    }

    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    public function setUsuarioId($usuario_id)
    {
        $this->usuario_id = $usuario_id;
        return $this;
    }

    public function getProvincia()
    {
        return $this->provincia;
    }

    public function setProvincia($provincia)
    {
        $this->provincia = $this->db->real_escape_string($provincia);
        return $this;
    }

    public function getLocalidad()
    {
        return $this->localidad;
    }

    public function setLocalidad($localidad)
    {
        $this->localidad = $this->db->real_escape_string($localidad);
        return $this;
    }

    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setDireccion($direccion)
    {
        $this->direccion = $this->db->real_escape_string($direccion);
        return $this;
    }

    public function getCoste()
    {
        return $this->coste;
    }

    public function setCoste($coste)
    {
        $this->coste = $coste;
        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
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

    public function getHora()
    {
        return $this->hora;
    }

    public function setHora($hora)
    {
        $this->hora = $hora;
        return $this;
    }



    public function getAll()
    {
        $productos = $this->db->query("SELECT * FROM PEDIDOS ORDER BY id DESC");
        return $productos;
    }

    public function getOne()
    {
        $producto = $this->db->query("SELECT * FROM PEDIDOS WHERE id = {$this->id}");
        return $producto->fetch_object();
    }

    public function getOneByUser()
    {
        $sql = "SELECT P.id, P.coste FROM PEDIDOS AS P
                WHERE P.usuario_id = {$this->getUsuarioId()}
                ORDER BY id DESC LIMIT 1";

        $pedido = $this->db->query($sql);
        return $pedido->fetch_object();
    }

    public function getAllByUser()
    {
        $sql = "SELECT * FROM PEDIDOS AS P
                WHERE P.usuario_id = {$this->getUsuarioId()}
                ORDER BY id DESC";

        $pedido = $this->db->query($sql);
        return $pedido;
    }

    public function getProductosByPedido($id){

        $sql = "SELECT pr.*, lp.unidades FROM PRODUCTOS AS pr 
                INNER JOIN LINEAS_PEDIDOS AS lp ON pr.id = lp.producto_id
                WHERE lp.pedido_id = {$id};";

        $productos = $this->db->query($sql);

        return $productos;
    }

    public function save()
    {
        $sql = "INSERT INTO PEDIDOS VALUES (NULL, {$this->getUsuarioId()}, '{$this->getProvincia()}', '{$this->getLocalidad()}', '{$this->getDireccion()}', {$this->getCoste()}, 'confirmed', CURDATE(), CURTIME());";
        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function save_linea(){

        $sql = "SELECT LAST_INSERT_ID() AS 'pedido';";
        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido;


        foreach ($_SESSION['carrito'] as $elemento) {
            $producto = $elemento['producto'];

            $insert = "INSERT INTO LINEAS_PEDIDOS VALUES (NULL, {$pedido_id}, {$producto->id}, {$elemento['unidades']} )";
            $save = $this->db->query($insert);

        }

        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function edit(){
        Utils::isAdmin();
        if(isset($_POST)){

            $sql = "UPDATE PEDIDOS SET estado = '{$this->getEstado()}'
                    WHERE id = {$this->getId()};";

            echo $sql."<br><br>";

            $save = $this->db->query($sql);
            $result = false;
            if ($save) {
                $result = true;
            }

            return $result;
        }
    }

}