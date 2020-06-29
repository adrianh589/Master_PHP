<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Comment;
use App\Like;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');//Este middle ware hace que el resto de metodos sean privados a los usuarios NO identificados
    }

    public function create(){
        return view('image.create');
    }

    public function save(Request $request)
    {
        //Validacion
        $validate = $this->validate($request, [
            'description' => ['required'],
            'image_path'  => ['required', 'image'],
        ]);

        //Recoger datos
        $image_path = $request->file('image_path');//Recordar que para imagenes toca con file
        $description = $request->input('description');

        //Asignar valores al objeto
        $user = \Auth::user();

        $image = new Image();
        $image->user_id = $user->id;
        $image->description = $description;

        //Subir fichero
        if($image_path){
            $image_path_name = time().$image_path->getClientOriginalName();
            Storage::disk('images')->put($image_path_name, File::get($image_path));//Recordar que eesta funcion mueve de la carpeta temporal, a la carpeta Storage que yo le indique para guardarla de finitivamente en el servidor
            $image->image_path = $image_path_name;//Este es el nombre que se guardara en la base de datos
        }

        //Guardar en la bd
        $image->save();

        //Redireccion
        return redirect()->route('home')->with([
            'message' => 'La foto ha sido subida correctamente'
        ]);

    }

    public function getImage($filename)
    {
        $file = Storage::disk('images')->get($filename);
        return new Response($file, 200);//para retornar la imagen
    }

    public function detail($id)
    {
        $image = Image::find($id);

        return view('image.detail', ['image' => $image]);
    }

    public function delete($id)
    {
        $user = Auth::user();
        $image = Image::find($id);
        $comments = Comment::where('image_id', $id)->get();
        $likes = Like::where('image_id', $id)->get();

        if($user && $image && $image->user->id == $user->id){

            //Eliminar los comentarios
            if( $comments && count($comments)>=1 ){
                foreach ($comments as $comment){
                    $comment->delete();
                }
            }

            //Eliminar los likes
            if( $likes && count($likes)>=1 ){
                foreach ($likes as $like){
                    $like->delete();
                }
            }

            //Eliminar ficheros de imagen
            Storage::disk('images')->delete($image->image_path);


            //Eliminar registro de la imagen
            $image->delete();
            $message = array('message' => 'La imagen se ha borrado correctamente');
        }else{
            $message = array('message' => 'La imagen no se ha borrado correctamente');
        }

        return redirect()->route('home')->with($message);
    }

    public function edit($id)
    {
        $user = \Auth::user();
        $image = Image::find($id);

        if($user && $image && $image->user->id == $user->id){
            return view('image.edit', ['image' => $image]);
        }else{
            return redirect()->route('home', ['image' => $image]);
        }
    }

    public function update(Request $request)
    {
        //Validacion
        $validate = $this->validate($request, [
            'description' => ['required'],
            'image_path'  => ['image'],
        ]);

        //Recoger datos
        $image_id = $request->input('image_id');//id de la foto
        $image_path = $request->file('image_path');//Esta es la foto en si
        $description = $request->input('description');//descripcion de la foto

        //Conseguir objeto image en la bd
        $image = Image::find($image_id);
        $image->description = $description;

        //Subir fichero
        if($image_path){
            $image_path_name = time().$image_path->getClientOriginalName();
            Storage::disk('images')->put($image_path_name, File::get($image_path));//Recordar que eesta funcion mueve de la carpeta temporal, a la carpeta Storage que yo le indique para guardarla de finitivamente en el servidor
            $image->image_path = $image_path_name;//Este es el nombre que se guardara en la base de datos
        }

        //Actualizar registro
        $image->update();

        return redirect()->route('image.detail', ['id' => $image_id])
            ->with(['message' => 'La imagen se ha actualizado correctamente']);
    }
}
