<?php


class NotaController
{

    public function listar()
    {
        //Modelo
        require_once 'models/Nota.php';

        //Lógica accion del controlador
        $nota = new Nota();

        $notas = $nota->conseguirTodos('notas');

        //Vista
        require_once 'views/nota/listar.php';


    }

    public function crear()
    {
        //Modelo
        require_once 'models/Nota.php';

        //
        $nota = new Nota();
        $nota->setUsuarioId(1);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("Descripcion de mi nota");
        $guardar = $nota->guardar();

        //echo $nota->db->error;
        //die();
        //Vista
        header("Location: index_maqueta.php?controller=Nota&action=listar");
    }

    public function borrar()
    {
        
    }

}