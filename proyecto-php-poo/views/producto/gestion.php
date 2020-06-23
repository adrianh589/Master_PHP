<h1>Gestion de productos</h1>

<a href="<?=base_url?>producto/crear" class="button button-small">
    Crear producto
</a>

<!-- Para la sesion de producto -->
<?php if(isset($_SESSION['producto'])  && $_SESSION['producto'] === 'complete'): ?>
    <strong class="alert_green">El producto fue creado correctamente</strong>
<?php elseif ( isset($_SESSION['producto'])  && $_SESSION['producto'] === 'failed'): ?>
    <strong class="alert_red">El producto NO fue creado exitosamente</strong>
<?php endif; ?>
<?php Utils::deleteSession('producto') ?>

<!-- Para la session de delete -->
<?php if(isset($_SESSION['delete'])  && $_SESSION['delete'] === 'completed'): ?>
    <strong class="alert_green">El producto fue eliminado correctamente</strong>
<?php elseif ( isset($_SESSION['delete'])  && $_SESSION['delete'] === 'failed'): ?>
    <strong class="alert_red">El producto NO fue eliminado con exito</strong>
<?php endif; ?>
<?php Utils::deleteSession('delete') ?>

<table>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>STOCK</th>
        <th>ACCIONES</th>
    </tr>
    <?php while ($producto = $productos->fetch_object()): ?>
        <tr>
            <td><?= $producto->id?></td>
            <td><?= $producto->nombre?></td>
            <td><?= $producto->precio?></td>
            <td><?= $producto->stock?></td>
            <td>
                <a href="<?=base_url?>producto/editar&id=<?=$producto->id?>" class="button button-gestion">Editar</a>
                <a href="<?=base_url?>producto/eliminar&id=<?=$producto->id?>" class="button button-gestion button-red">Eliminar</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>