<?php

class Usuario
{

    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $imagen;
    private $rol;
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

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos): void
    {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $this->db->real_escape_string($email);
    }

    public function getPassword()
    {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setImagen($imagen): void
    {
        $this->imagen = $imagen;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol): void
    {
        $this->rol = $rol;
    }

    /*Consultas con la bd*/
    public function save(): bool
    {
        $sql = "INSERT INTO USUARIOS VALUES (NULL, '{$this->getNombre()}', '{$this->getApellidos()}', '{$this->getEmail()}', '{$this->getPassword()}', 'user', NULL);";
        $save = $this->db->query($sql);

        $result = false;
        if ($save) {
            $result = true;
        }

        return $result;
    }

    public function login()
    {
        $result = false;
        $email = $this->email;
        $password = $this->password;

        //Comprobar
        $sql = "SELECT * FROM USUARIOS WHERE email = '$email'";
        $login = $this->db->query($sql);

        if($login && $login->num_rows == 1 ){
            $usuario = $login->fetch_object();

            //verificar la contaseña
            $verify = password_verify($password, $usuario->password);

            if($verify){
                $result = $usuario;
            }
        }
        return $result;
    }

}