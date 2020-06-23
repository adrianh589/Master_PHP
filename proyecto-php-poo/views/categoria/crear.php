<h1> Crear categoria </h1>

<form action="<?=base_url?>categoria/save" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" placeholder="Introduce el nombre de la categoria" name="nombre" required>
    <input type="submit" value="Guardar">
</form>