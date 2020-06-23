<?php

class Utils{

    public static function deleteSession($name)
    {
        if(isSet($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public static function isAdmin(){
        if(!isset($_SESSION['admin'])){
            header("Location:".base_url);
        }else{
            return true;
        }
    }

    public static function isIdentity(){
        if(!isset($_SESSION['identity'])){
            header("Location:".base_url);
        }else{
            return true;
        }
    }

    public static function showCategorias(){
        require_once 'models/Categoria.php';
        $categoria = new Categoria();
        $categorias = $categoria->getAll();
        return $categorias;
    }

    public static function recortarPalabras($palabra){
        $recorte = $palabra;
        if(strlen($palabra) >= 15){
            $recorte = substr($palabra, 0, 15)."...";
        }
        return $recorte;
    }

    public static function statsCarrito(){

        $stats = array(
            "count" => 0,
            "total" => 0
        );

        if(isset($_SESSION['carrito'])){
            $stats['count'] = count($_SESSION['carrito']);
            foreach ($_SESSION['carrito'] as $indice => $producto){
                $stats['total'] += $producto['precio']*$producto['unidades'];
            }
        }

        return $stats;

    }

    public static function showStatus($status){
        $value = 'pendiente';

        if($status == 'confirmed'){
            $value = 'pendiente';
        }elseif ($status == 'preparation'){
            $value = 'En preparacion';
        }elseif ($status == 'ready'){
            $value = 'preparado';
        }elseif ($status == 'sended'){
            $value = 'enviado';
        }

        return $value;
    }
}
