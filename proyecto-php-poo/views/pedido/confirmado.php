<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'completed'): ?>

    <h1>Tu pedido se ha confirmado</h1>
    <p>
        Tu pedido ha sido guardad con exito! una vez que realices la transferencia bancaria
        a la cuenta 5254165416
        con el coste del pedido será procesado y enviado
    </p>
    <br>

    <?php if (isset($pedido)): ?>

        <h3>Datos del pedido:</h3>

        Numero de pedido: <?= $pedido->id ?>
        <br>
        Total a pagar: $ <?= $pedido->coste ?>
        <br>
        Productos:
        <br>


        <table>
            <tr>
                <th>IMAGEN</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>UNIDADES</th>
            </tr>
            <?php while ($producto = $productos->fetch_object()): ?>
                <tr>
                    <td>
                        <?php if (!is_null($producto->imagen)): ?>
                            <img src="<?= base_url ?>uploads/images/<?= $producto->imagen ?>" class="product_img">
                        <?php else: ?>
                            <img src="<?= base_url ?>assets/img/camiseta.png" class="product_img">
                        <?php endif; ?>
                    </td>

                    <td>
                        <a href="<?= base_url ?>producto/ver&id=<?= $producto->id ?>"><?= $producto->nombre ?></a>
                    </td>

                    <td>
                        <?= $producto->precio ?>
                    </td>

                    <td>
                        <?= $producto->unidades ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>

    <?php endif; ?>

<?php elseif (isset($_SESSION['pedido']) && $_SESSION['pedido'] != 'completed'): ?>
    <h1>Tu pedido NO ha podido procesarse</h1>
<?php endif; ?>
