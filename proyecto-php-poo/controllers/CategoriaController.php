<?php

require_once 'models/Categoria.php';
require_once 'models/Producto.php';

class CategoriaController{

    public function index(){
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        require_once 'views/categoria/index.php';
    }

    public function crear(){
        Utils::isAdmin();
        require_once 'views/categoria/crear.php';
    }

    public function save(){
        Utils::isAdmin();
        //Guardar categoria en la bd
        if(isset($_POST) && isset($_POST['nombre'])){
            $categoria = new Categoria();
            $categoria->setNombre($_POST['nombre']);
            $categoria->save();
        }
        //Redireccion
        header("Location:".base_url."categoria/index");

    }

    public function ver(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];


            //Conseguir categoria
            $categoria = new Categoria();
            $categoria->setId($id);
            $categoria = $categoria->getOne();

            //Conseguir productos
            $productos = new Producto();
            $productos->setCategoriaId($id);
            $productos = $productos->getAllCategory();
        }
        require_once 'views/categoria/ver.php';
    }

}