<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hola mundo con Symfony 5'
        ]);
    }

    public function animales($nombre, $apellidos)
    {
        $title = 'Bienvenido a la pagina de animales';

        $animales = array('Conejo', 'Caballo', 'Perro', 'Pajaro', 'Hipopotamo',
                           'Aguila', 'Serpiente', 'Leon', 'Araña', 'Jirafa' );

        $especiesAnimales = array('Pajaros' => ['petirrojo', 'carpintero'], 'Perros'
        => ['dobberman', 'pitbull'], 'Serpientes' => ['boa', 'mamba negra']);

        return $this->render('home/animales.html.twig', [
            'title' => $title,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'animales' => $animales,
            'especies_animales' => $especiesAnimales
        ]);
    }

    public function redirigir()
    {
        //Redirigir hacia una ruta
//        return $this->redirectToRoute('animales', [
//            'nombre' => 'Juan',
//            'apellidos' => 'Mendez'
//        ]);

        return $this->redirect('http://victorroblesweb.es/academy');
    }
}
