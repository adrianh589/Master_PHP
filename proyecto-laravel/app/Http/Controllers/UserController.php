<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;//Para poder acceder al storage
use Illuminate\Support\Facades\File;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');//Este middle ware hace que el resto de metodos sean privados
    }

    public function index($search = null)//El metodo index es el que lista las cosas dentro de Laravel
    {
        if (!empty($search)){
            $users = User::where('nick', 'LIKE', '%'.$search.'%')
                ->orWhere('name', 'LIKE', '%'.$search.'%')
                ->orWhere('surname', 'LIKE', '%'.$search.'%')
                ->orderBy('id', 'desc')
                ->paginate(5);
        }else{
            $users = User::orderBy('id','desc')->paginate(5);
        }

        return view('user.index', [
            'users' => $users
        ]);
    }

    public function config()
    {
        return view('user.config');
    }

    public function update(Request $request)
    {
        //Conseguir usuario identificado (si no estuviera identificado, tocaria hacer un FIND un select a la bd)
        $user   = \Auth::user();
        $id     = $user->id;

        //Asi se valida un formulario en Laravel
        $validate   = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'nick' => ['required', 'string', 'max:255', 'unique:users,nick,'.$id],//Si me llega la misma informacion, entonces le decimos que me lo compare con el de la base de datos y haga una excepcion con el id indicado
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],//Lo mismo con el email
        ]);

        //Recibir los datos que llegan por POST del formulario
        $name   = $request->input('name');
        $surname= $request->input('surname');
        $nick   = $request->input('nick');
        $email  = $request->input('email');

        //Subir la imagen
        $image_path = $request->file('image_path');
        if($image_path){
            //Poner nombre unico
            $image_path_name = time().$image_path->getClientOriginalName(); //El time es para que el nombre sea unico

            //Guardar en la carpeta Storage (storage/app/usres)
            //Recordadr que las imagenes se guardan en un directorio temporal, entonces con la clase File:: lo que se hace es guardar definitivamente la iamgen en el servidor
            Storage::disk('users')->put($image_path_name, File::get($image_path));//Nombre del disco a guardar, put->(nombre de la imagen, el fichero en si)

            //Seteo el nombre de la imagen en el objeto
            $user->image = $image_path_name;
        }

        //Asignar nuevos valores al objeto de usuario
        $user->name     = $name;
        $user->surname  = $surname;
        $user->nick     = $nick;
        $user->email    = $email;

        //Ejecutar consulta y cambios en la bd
        $user->update();

        return redirect()->route('config')
            ->with(["message" => "Usuario actualizado correctamente"]);
    }

    /**
     * Metodo para sacar del storage la imagen
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);//Devuelvo una respuesta con el fichero
    }

    public function profile($id)
    {
        $user = User::find($id);

        return view('user.profile', [
            'user' => $user
        ]);
    }



}
