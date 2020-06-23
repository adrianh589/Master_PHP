<?php

require_once 'models/Usuario.php';

class UsuarioController
{
    public function index()
    {
        echo "Controlador usuarios accion index";
    }

    public function registro()
    {
        require_once 'views/usuario/registro.php';//vista
    }

    public function save()
    {
        if (isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;

            if($nombre && $apellidos && $email && $password) {
                $usuario = new Usuario();
                $usuario->setNombre($nombre);
                $usuario->setApellidos($apellidos);
                $usuario->setEmail($email);
                $usuario->setPassword($password);
                $save = $usuario->save();
                if ($save) {
                    $_SESSION['register'] = "complete";
                } else {
                    $_SESSION['register'] = "failed";
                }
            } else{
                $_SESSION['register'] = "failed";
            }
        } else {
            $_SESSION['register'] = "failed";
        }
        header("Location:" . base_url . "usuario/registro");
    }

    public function login(){
        if(isSet($_POST)){
            //identificar al usuario
            //Consulta a la base de datos
            $usuario = new Usuario();
            $usuario->setPassword($_POST['password']);
            $usuario->setEmail($_POST['email']);

            $identity = $usuario->login();

            if($identity && is_object($identity)) {
                $_SESSION['identity'] = $identity;

                if ($identity->rol == 'admin') {
                    $_SESSION['admin'] = true;
                }

            }else{
                $_SESSION['error_login'] = 'identificacion fallida';
            }
        }
        header("Location:".base_url);
    }

    public function logout(){
        if( isSet($_SESSION['identity']) ){
            unset($_SESSION['identity']);
        }

        if( isSet($_SESSION['admin']) ){
            unset($_SESSION['admin']);
        }

        header("Location:".base_url);
    }
}//Fin clase