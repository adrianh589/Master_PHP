<?php

if (isset($_POST)) {
    require_once 'includes/conexion.php';

    //Recoger valores del formulario del registro
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false ;           //
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;   //mysqli_real_escape_string() se usa porque las "" no estan permitidas en las consultas sql
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;               //tambien se da seguridad porque evitamos

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

    $guardar_usuario = false;
    //Si no hay ningun error
    if( count($errores) == 0 ){
        $guardar_usuario = true;

        $usuario = $_SESSION['usuario'];

        //Comprobar si el email ya existe
        $sql = "SELECT id, email FROM usuarios AS u WHERE u.email = '$email'";
        $verificar = mysqli_query($db, $sql);
        $isset_usuario = mysqli_fetch_assoc($verificar);


        if($isset_usuario['id'] == $usuario['id'] || empty($isset_usuario)){

            $sql = ("UPDATE usuarios SET  
                    nombre = '$nombre',
                    apellidos = '$apellidos',
                    email = '$email'
                    WHERE id = {$_SESSION['usuario']['id']}");

            $guardar = mysqli_query($db, $sql);

            if ($guardar) {

                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;

                $_SESSION['completado'] = "Tus datos se han actualizado con exito";
            } else {
                $_SESSION['errores']['general'] = "Fallo al actualizar tus datos";
            }
        }else{
            $_SESSION['errores']['general'] = "Este email ya existe";
        }

    }else{
        $_SESSION['errores'] = $errores;
    }
}

//Redireccionamos a mis datos
header("Location: mis-datos.php");
