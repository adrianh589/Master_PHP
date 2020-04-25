<?php


if (isset($_POST)) {
    require_once 'includes/conexion.php';

    $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
    $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
    $categoria = isset($_POST['categoria']) ? (int) $_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['id'];

    //Array de errores
    $errores = array();

    //Validar los datos en la base de datos

    //Validar campo nombre
    if (empty($titulo)) {
        $errores['titulo'] = "El titulo no es valido";
    }

    //Validar campo descricpion
    if (empty($descripcion)) {
        $errores['descripcion'] = "La descripcion no es valida";
    }

    //Validar campo categoria
    if (empty($categoria) && !is_integer($categoria) ) {
        $errores['categoria'] = "La categoria no es valida";
    }





    if (count($errores) == 0) {
        if(isset($_GET['validar'])) {
            $entrada_id = $_GET['editar'];
            $sql = "UPDATE entradas SET titulo = $titulo, descripcion = $descripcion, categoria_id = $categoria 
                    WHERE id = $entrada_id AND usuario_id = $usuario";
        }else {
            $sql = "INSERT INTO entradas VALUES (NULL, $usuario, '$titulo', '$descripcion', CURDATE(), $categoria);";
        }
        $guardar = mysqli_query($db, $sql);
        header("location: index.php");
    }else{
        $_SESSION['errores_entrada'] = $errores;
        if(isset($_GET['validar'])){
            header("Location: editar-entrada.php?id={$_GET['editar']}");
        }
        header("Location: crear-entradas.php");
    }
}