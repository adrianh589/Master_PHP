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

//use App\Image; Pruebas ORM

Route::get('/', function () {


    /*$images = Image::all();//Pruebas del ORM

    foreach ($images as $image){
        echo $image->image_path."<br>";
        echo $image->user->name.' '.$image->user->surname;

        if(count($image->comments)>=1) {
            echo "<br><strong>Comentarios</strong>";
            foreach ($image->comments as $comment) {//Recordar que cuando llamo un metodo de un modelo se convierte en una propiedad
                echo "<br>" . $comment->content . "<br>";
            }
        }

        echo "<h4>Cantidad de likes de esta imagen: </h4>";
        echo count($image->likes);

        echo "<hr>";
    }*/

    return view('welcome');
});

Auth::routes();

// GENERALES
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

// USUARIO
Route::get('/configuracion', 'UserController@config')->name('config');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::get('/perfil/{id}', 'UserController@profile')->name('profile');
Route::get('/gente/{search?}', 'UserController@index')->name('user.index');

// IMAGEN
Route::get('/subir-imagen', 'ImageController@create')->name('image.create');
Route::post('/image/save', 'ImageController@save')->name('image.save');
Route::get('/image/file/{filename}', 'ImageController@getImage')->name('image.file');
Route::get('/imagen/{id}', 'ImageController@detail')->name('image.detail');
Route::get('/image/delete/{id}', 'ImageController@delete')->name('image.delete');
Route::get('/imagen/editar/{id}', 'ImageController@edit')->name('image.edit');
Route::post('/image/update', 'ImageController@update')->name('image.update');

// COMENTARIO
Route::post('/comment/save', 'CommentController@save')->name('comment.save');
Route::get('/comment/delete/{id}', 'CommentController@delete')->name('comment.delete');

// LIKE
Route::get('/like/{image_id}', 'LikeController@like')->name('like.save');
Route::get('/dislike/{image_id}', 'LikeController@dislike')->name('like.delete');
Route::get('/likes', 'LikeController@index')->name('likes');
