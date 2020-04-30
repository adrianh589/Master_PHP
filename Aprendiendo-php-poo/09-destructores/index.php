<?php

class Usuario {
    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Adrian Hoyos";
        $this->email = "adrianh_589@hotmail.com";
        echo "Instancia del objeto creada <br>";//NO se deben imprimir cosas en el cosntructor, pero es con fines didacticis
    }

    public function __destruct()
    {
        echo "<br> Destruyendo el objeto";
    }

    public function __toString()//Este metodo permite que cuando intentemos imprimir un objeto, este NO genere error e imprima lo que tene aca en toString();
    {
        return "Hola $this->nombre, estas registrado con: $this->email";
    }
}

$usuario = new Usuario();

for ($i = 0; $i <= 200; $i++){
    echo $i."<br>";
}


echo $usuario;

//echo $usuario->email;

//Aqui se observa que el destructor solo se llama cuando un objeto no se vaya a usar mas