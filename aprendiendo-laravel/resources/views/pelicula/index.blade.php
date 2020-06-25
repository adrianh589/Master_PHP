<h1>{{$titulo}}</h1>
<p>Accion idnex del controlador Peliculas controller</p>

@if(isset($pagina))
    <h3>La pagina es: {{$pagina}}</h3>
@endif

<a href="{{action('PeliculaController@detalle')}}">Ir al detalle Action</a> <!-- Con esto ponemos Controlador@accion -->
<br>
<a href="{{route('detalle.pelicula', ['id' => 12])}}">Ir al detalle Route</a> <!-- Con esto ponemos solo la ruta a la que nos queremos dirigi especificandi SU NOMBRE -->
