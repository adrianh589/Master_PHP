<?php

if (isset($_POST)) {
    require_once 'includes/conexion.php';

    if(!isset($_SESSION)){
        session_start();
    }

    //Recoger valores del formulario del registro
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false ;           //
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;   //mysqli_real_escape_string() se usa porque las "" no estan permitidas en las consultas sql
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;               //tambien se da seguridad porque evitamos
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;      //inyeccion sql

    //Array de errores
    $errores = array();

    //Validar los datos en la base de datos

    //Validar campo nombre
    if( !empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre) ){/*preg_match valida que haya un patron*/
        $nombre_validado = true;
    }else{
        $nombre_validado= false;
        $errores['nombre'] = "El nombre no es válido";
    }

    //Validar apellidos
    if( !empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos) ){/*preg_match valida que haya un patron*/
        $apellidos_validados = true;
    }else{
        $apellidos_validados= false;
        $errores['apellidos'] = "Los apellidos no son válidos";
    }

    //Validar el email
    if( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ){/*preg_match valida que haya un patron*/
        $email_validado = true;
    }else{
        $email_validado= false;
        $errores['email'] = "El email no es válido";
    }

    //Validar la password
    if( !empty($password)){/*preg_match valida que haya un patron*/
        $password_validado = true;
    }else{
        $password_validado= false;
        $errores['password'] = "La password esta vacia";
    }

    $guardar_usuario = false;
    //Si no hay ningun error
    if( count($errores) == 0 ){
        $guardar_usuario = true;

        //Insertar usuario en la base de datos en su tabla correspondiente
        $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);/*Esta funcion cifra las contraseñas, el 'cost' en este caso significa que cifra la contraseña 4 veces*/

        $sql = ("INSERT INTO usuarios VALUES (NULL, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE())");

        /*var_dump(password_verify($password, $password_segura));//Esta funcion me verifica que la contraseña que introdujo el suario sea igual a la HASHEADA de la base de datos*/
        $guardar = mysqli_query($db, $sql);
        if($guardar){
            $_SESSION['completado'] = "El registro se ha completado con exito";
        }else{
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
        }
    }else{
        $_SESSION['errores'] = $errores;
        header("Location: index_maqueta.php");
    }
}

//Redireccionamos al inicio
header("Location: index_maqueta.php");



