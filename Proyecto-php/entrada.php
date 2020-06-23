<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
//Se pone al principio para validar que exista el id de la categoria
//En caso de que no exista, simplemente sera redirigido a otra página
$entradaActual = conseguirEntrada($db, $_GET['id']) ;
if(!isset($_GET['id'])){
    header("Location: index_maqueta.php");
}
?>

<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php' ?>

<!-- CAJA PRINCIPAL -->

<div id="principal">

    <h1><?=$entradaActual['titulo']?></h1>

    <a href="categoria.php?id=<?=$entradaActual['categoria_id']?>">
        <h3><?=$entradaActual['categoria']?></h3>
    </a>

    <h4><?=$entradaActual['fecha']?> | Por: <?=$entradaActual['usuario']?></h4>
    <p>
        <?=$entradaActual['descripcion']?>
    </p>

    <?php if( isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] == $entradaActual['usuario_id']  ) : ?>
        <a href="editar-entrada.php?id=<?=$entradaActual['id']?>" class="boton boton-verde">Editar entradas</a>
        <a href="borrar-entrada.php?id=<?=$entradaActual['id']?>" class="boton boton-rojo">Eliminar entrada</a>
    <?php endif; ?>

</div>


<?php require_once 'includes/pie.php' ?>

</body>
</html>
