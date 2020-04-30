
<h1>Listado de notas</h1>

<?php while  ($nota = $notas->fetch_object()): ?>

    <?= $nota->titulo ?>
    <br>
    <?= $nota->fecha ?>

<?php endwhile; ?>
