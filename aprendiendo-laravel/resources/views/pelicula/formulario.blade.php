<h1>Formulario en laravel </h1>

<form action="{{action('PeliculaController@recibir')}}" method="post">
    {{csrf_field()}}<!-- ES OBLIGATORIO EN FORMULARIOS o si no dirá pagina expirada -->
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">

    <label for="email">Email</label>
    <input type="email" name="email">

    <input type="submit" value="Enviar">
</form>
