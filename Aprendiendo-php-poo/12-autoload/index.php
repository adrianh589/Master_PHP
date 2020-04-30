<?php

/*
 * AUTOCARGA: la autocarga nos evita la molestia de tener que hacer
 * require_once por cada clase que necesitemos, es por ello que fue creada
 * para evitar tanto require y que se haga de manera automatica, de ahi la
 * palabra AUTOCARGA
 * */

//require_once 'clases/MisClases/Usuario.php';
//require_once 'clases/MisClases/Entrada.php';      //ME evito escribir todo esto
//require_once 'clases/MisClases/Categoria.php';
//require_once 'clases/PanelAdministrador/Usuario.php';

require_once 'autoload.php';

//$usuario = new Usuario();

//echo $usuario->nombre;

//ESPACIOS DE NOMBRES Y PAQUETES

/*
 * La funcion principal de los namespaces es reducir el codigo
 * en cuanto a referirnos a rutas, ya que puede existir la opcion de que
 * una clase este contenida dentro de muchas carpetas.
 * */

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;//Aqui se define el nameSpace

use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal {

    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {

        $this->usuario = new Usuario();      //
        //$this->categoria = new Categoria(); //Como se observa aca, no es necesario usar Misclases\ porque ya se definio en el use
        //$this->entrada = new Entrada();     //
    }

    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }

    public function setUsuario(Usuario $usuario): void
    {
        $this->usuario = $usuario;
    }

    public function getCategoria(): Categoria
    {
        return $this->categoria;
    }

    public function setCategoria(Categoria $categoria): void
    {
        $this->categoria = $categoria;
    }

    public function getEntrada(): Entrada
    {
        return $this->entrada;
    }

    public function setEntrada(Entrada $entrada): void
    {
        $this->entrada = $entrada;
    }

    function informacion(){
        echo __METHOD__;
    }

}



//Objeto Principal
$principal = new Principal();
var_dump($principal->usuario);

// Objeto de otro paquete
$usuario = new UsuarioAdmin();
var_dump($usuario);

//Comprobar si existe una clase
//Los alias NO pueden usarse para comprobar
$clase = class_exists('MisClases\Usuario');


//Verificar los metodos que tiene una clase
var_dump(get_class_methods($principal));

$principal->informacion();

if($clase){
    echo "<h1> La clase si existe </h1>";
}else{
    echo "<h1> La clase NO existe </h1>";
}