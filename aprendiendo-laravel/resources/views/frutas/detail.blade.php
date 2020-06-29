
<h1>{{$fruta->nombre}}</h1>

<ul>
    <li>Nombre: {{$fruta->nombre}}</li>
    <li>Descripcion: {{$fruta->descripcion}}</li>
    <li>Fecha: {{$fruta->fecha}}</li>
</ul>

<a href="{{action('FrutaController@index')}}">Volver al listado de las frutas</a>
