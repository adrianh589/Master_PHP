
@if( isset($fruta) && is_object($fruta))
    <h1>Editar una fruta</h1>
@else
    <h1>Crear una fruta</h1>
@endif

<form action="{{isset($fruta) ? action('FrutaController@update', ['id' => $fruta->id]) : action('FrutaController@save')}}" method="POST">
    {{csrf_field()}} <!-- NO OLVIDAR ESTO PARA EVITAR QUE LA PAGINA NO RESPONDA, ademas evitamos el csrf -->
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{$fruta->nombre ?? ''}}">

    <br>

    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="{{$fruta->descripcion ?? ''}}">

    <br>

    <label for="precio">Precio</label>
    <input type="number" name="precio" value="{{$fruta->precio ?? 0}}">

    <br>

    <input type="submit" value="Guardar">
</form>
