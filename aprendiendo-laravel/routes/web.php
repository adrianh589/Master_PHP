<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
 * GET:    Conseguir datos
 * POST:   Guardar datos o recursos
 * PUT:    Actualizar recursos
 * DELETE: Eliminar recursos
 *
 * En una ruta solo puede haber LOGICA y MANDAR A CARGAR UNA VISTA, no mas


Route::get('/mostrar-fecha', function (){
    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha', array(
        'titulo' => $titulo //Asi se le pasan variables a las vistas
    )); //Con return view cargo una vista
});

//Enviar parametros por la url
//Route::get('/pelicula/{titulo}', function ($titulo){
//    return view('pelicula', array(
//       'titulo' => $titulo
//    ));
//});

//Enviar parametros opcionales
//Route::get('/pelicula/{titulo?}', function ($titulo = 'No hay nada en el titulo'){
//    return view('pelicula', array(
//        'titulo' => $titulo
//    ));
//});

//Cargar una URL con una condicion, en este caso cargarla cuando es texto en minuscula
Route::get('/pelicula/{titulo}/{year?}', function ($titulo, $year = 2019){
    return view('pelicula')
    ->with([
       'titulo' => $titulo,
        'year'  => $year                //Puedo mandar por un array lso valores con WITH
    ]);
})->where(array(//Condiciones
        'titulo' => '[a-z]+',
        'year'   => '[0-9]+'
    ));

//php artisan route:list    -> Comando para ver las rutas que eh creado actualmente en mi proyecto

Route::get('/listado-peliculas',
    function () {
        $titulo = "Listado de peliculas";
        $listado = array('Avengers', 'Batman', 'Superman', 'Spiderman', 'AntMan');
        return view('peliculas.listado')
            ->with('titulo', $titulo)                   //O puedo encadenar WITH
            ->with('listado', $listado);
    });

Route::get('/pagina-generica', function (){
   return view('pagina');
});
*/

//Forma correcta de generar rutas, 1er Parametro: nombre de la ruta
//2do Parametro: Controlador@Accion

/*
 * Para mandar parametros de esta forma, se tiene que poner en el controlador
 *dicho parametro seguido de mandarlo a la vista con el ->with
*/
Route::get('/peliculas/{pagina?}', 'PeliculaController@index');

Route::get('/detalle/{year?}', [
    'uses' => 'PeliculaController@detalle',
    'as' => 'detalle.pelicula'])//De esta manera se puede dar un nombre a los controladores para visualizarlos en artisan
->middleware('testyear');

Route::resource('/usuario', 'UsuarioController');//Con esto añadimos TODOS los metodos de una misma ruta, sin la necesidad de hacerlo accion por accion

//Rura para ahcer una redireccion
Route::get('/redirigir', 'PeliculaController@redirigir');

//Para el fommulario
Route::get('/formulario', 'PeliculaController@formulario');

//Ruta para la accion del formulario
Route::post('/recibir', 'PeliculaController@recibir');

//Ruta frutas
Route::group( ['prefix' => 'frutas'], function (){ //El prefijo es para que todas las rutas que yo agregue, tambien lo tengan
    Route::get('/index', 'FrutaController@index');//EJ: frutas/index
    Route::get('/detail/{id}', 'FrutaController@detail');// frutas/detail/{id}
    Route::get('/crear', 'FrutaController@crear');
    Route::post('/save', 'FrutaController@save');
    Route::get('/delete/{id}', 'FrutaController@delete');
    Route::get('/edit/{id}', 'FrutaController@edit');
    Route::post('/update/{id}', 'FrutaController@update');
});


