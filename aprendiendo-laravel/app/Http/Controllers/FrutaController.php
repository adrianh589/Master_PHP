<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    public function index(){
        $frutas = DB::table('frutas')
            ->orderBy('id', 'DESC')
            ->get();//equivalente a SELECT * FROM FRUTAS
        return view('frutas.index')
            ->with('frutas', $frutas);
    }

    public function detail($id){
        $fruta = DB::table('frutas')
            ->where('id', '=', $id)
            ->first();//first() me saca un objeto limpio, puede reemplazar al get pero tener en cuenta que solo saca el primer resultado de la consulta de la BD

        return view('frutas.detail')
            ->with('fruta', $fruta);
    }

    public function crear()
    {
        return view('frutas.create');
    }

    public function save(Request $request)//Recordar que el request es para acceder a los datos que me lleganb por la peticion
    {//En este caso los parametros por POST del formulario

        $nombre         = $request->input('nombre');        //
        $descripcion    = $request->input('descripcion');   //Los request solo se usan en POST
        $precio         = $request->input('precio');        //

        //Guardar registro en la base de datos
        $fruta = DB::table('frutas')->insert(array(
            'nombre'        => "$nombre",
            'descripcion'   => "$descripcion",
            'precio'        => $precio,
            'fecha'         => date('Y-m-d')
        ));

        return redirect()->action('FrutaController@index')->with('status', 'fruta creada correctamente');;//Redirigir
    }

    public function delete($id){
        $eliminar = DB::table('frutas')
            ->where('id', '=', $id)
            ->delete();
        return redirect()->action('FrutaController@index')->with('status', 'fruta borrada correctamente');
    }

    public function edit($id){
        //Sacar el registro de la base de datos

        $fruta = DB::table('frutas')
            ->where('id', '=', $id)
            ->first();

        //Pasarle a la vista el objeto y rellenar el formulario

        return view('frutas.create')
            ->with('fruta', $fruta);
    }

    public function update($id, Request $request)
    {
        $nombre = $request->input('nombre');
        $descripcion = $request->input('descripcion');
        $precio = $request->input('precio');

        $fruta = DB::table('frutas')
            ->where('id', '=', $id)
            ->update(array(
                'nombre'        =>  $nombre,
                'descripcion'   =>  $descripcion,
                'precio'        => $precio
            ));

        return redirect()->action('FrutaController@index')->with('status', 'fruta actualizada correctamente');
    }
}
