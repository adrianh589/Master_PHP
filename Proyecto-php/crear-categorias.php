<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php' ?>

<!-- CAJA PRINCIPAL -->

<div id="principal">
    <h1>Crear categorias</h1>
    <form action="guardar-categorias.php" method="POST">
        <p>Añade nuevas categorias al blog para que los usuarios puedan usarlas al crear sus entradas</p>
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">

        <input type="submit" value="Guardar">
    </form>
</div><!-- Fin principal -->

<?php require_once 'includes/pie.php' ?>