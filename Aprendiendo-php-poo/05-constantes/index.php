<?php
/*
 * Las constantes no cambian, ademas son estáticas
 * es por ello que se deben acceder con ::
 *
 * Dato: $this-> hace referencia al momento de referirse a un objeto es decir ESTE OBJETO ACCEDE A...
 *       en cambio self:: accede a nivel de clase, es decir que estoy modificando o accediendo
 *       directamente a la clase
 * */
class Usuario {

    public $email;
    public $password;
    const  URL_COMLETA = "http//:LocalHost";

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

}

$usuario = new Usuario();
echo $usuario::URL_COMLETA;
var_dump($usuario);