<h1>Tu listado de frutas es: </h1>

@if(session('status'))<!-- De esta manera se tratan las sesiones en laravel en lass vistas -->
    <p style="background: green">{{session('status')}}</p> <!-- Esto es una sesion flash, por lo que sol oaprece una vez -->
@endif

<h3><a href="{{action('FrutaController@crear')}}">Crear una fruta</a></h3>

<ul>

@foreach($frutas as $value)
    <li>
        <a href="{{action('FrutaController@detail', ['id' => $value->id])}}">{{$value->nombre}}</a> -
        <a href="{{action('FrutaController@delete', ['id' => $value->id])}}">Eliminar</a> -
        <a href="{{action('FrutaController@edit', ['id' => $value->id])}}">Editar</a>
    </li>
@endforeach

</ul>
