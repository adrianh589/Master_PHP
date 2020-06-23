<?php

/*
 * El controlador lo que hace es definit las acciones
 * */



class UsuarioController{

    public function mostrarTodos()
    {
        require_once 'models/Usuario.php';//Cargando el modelo
        $usuario = new Usuario();
        $todos_los_usuarios = $usuario->conseguirTodos('usuarios');
        require_once 'views/usuarios/mostrar_todos.php';
    }

    public function crear()
    {
        require_once 'views/usuarios/crear.php';
    }



}
