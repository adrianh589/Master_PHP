<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index($pagina = 1){
        $titulo = "Listado de mis peliculas";

        return view('pelicula.index')
            ->with('titulo', $titulo)
            ->with('pagina', $pagina);
    }

    public function detalle($year = null){
        return view('peliculas.detalle');
    }

    public function redirigir(){
        //return redirect()->action('PeliculaController@detalle'); //Redirigir con una accion
        //return redirect('/peliculas');//Asi se redirige hacia una ruta
        return redirect()->route('detalle.pelicula');//Recordar que para redirigir por rutas, toca por el NOMBRE de la ruta
    }

    public function formulario(){
        return view('pelicula.formulario');
    }

    public function recibir(Request $request){//Este parametro es para que cuando hayan datos que viajen por post peus los podamos recoger
        $name = $request->input('nombre');//Request accede a la peticion de http, Input acceder al metodo que trae el request
        $email = $request->input('email');//Recoger el email

        return "El nombre es: $name y el email es $email";
    }
}
