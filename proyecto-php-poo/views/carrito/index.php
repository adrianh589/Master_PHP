<h1>Carrito de la compra </h1>

<?php if( isset($_SESSION['carrito']) && count($_SESSION['carrito']) >= 1  ): ?>
<table>
    <tr>
        <th>IMAGEN</th>
        <th>NOMBRE</th>
        <th>PRECIO</th>
        <th>UNIDADES</th>
        <th>ELIMINAR</th>
    </tr>
    <?php
    foreach ($carrito as $indice => $elemento):
        $producto = $elemento['producto'];
        ?>
        <tr>
            <td>
                <?php if (!is_null($producto->imagen)): ?>
                    <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="product_img">
                <?php else: ?>
                    <img src="<?= base_url ?>assets/img/camiseta.png" class="product_img">
                <?php endif; ?>
            </td>

            <td>
                <a href="<?=base_url?>producto/ver&id=<?=$producto->id?>"><?=$producto->nombre?></a>
            </td>

            <td>
                <?=$producto->precio?>
            </td>

            <td>
                <a href="<?=base_url?>carrito/up&index=<?=$indice?>" class="button button-carrito">+</a>
                <?=$elemento['unidades']?>
                <a href="<?=base_url?>carrito/down&index=<?=$indice?>" class="button button-carrito">-</a>
                <a></a>
            </td>
            <td>
                <a href="<?=base_url?>carrito/remove&id=<?=$indice?>" class="button button_pedido button-red">Quitar producto</a>
            </td>
        </tr>
    <?php endforeach; ?>

</table>

<a href="<?=base_url?>carrito/delete_all" class="button button_pedido button-red">Vaciar Carrito</a>
<div class="total-carrito">
    <?php $stats = Utils::statsCarrito(); ?>
    <h3>Precio total: $ <?=$stats['total']?></h3>
    <a href="<?=base_url?>pedido/hacer" class="button button_pedido">Hacer pedido</a>
</div>

<?php else: ?>
    <h3>El carrito está vacio, añade productos</h3>
<?php endif; ?>
