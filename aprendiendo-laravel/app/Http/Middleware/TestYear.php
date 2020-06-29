<?php

namespace App\Http\Middleware;

use Closure;

/**
 * Class TestYear
 * @package App\Http\Middleware
 *
 * Un middleware se encarga de ejecutar una accion ANTES DE poder mostrar contenido
 * o lo que deseemos, en este ejemplo sera in intermediario ANTES DE comprobar que
 * el año pasado por parametro SEA 2020
 */
class TestYear
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $year = $request->route('year');

        if( is_null( $year ) || $year != 2019 ){//$request es la peticion que me llega por http
            return redirect('/peliculas');
        }

        return $next($request);
    }
}
