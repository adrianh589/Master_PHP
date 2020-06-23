<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
    //Se pone al principio para validar que exista el id de la categoria
    //En caso de que no exista, simplemente sera redirigido a otra página
    $todasLasEntradasCategoriaActual = conseguirEntradas($db, null, $_GET['id']) ;

    if(!isset($_GET['id'])){
        header("Location: index_maqueta.php");
    }
?>

<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php' ?>

<!-- CAJA PRINCIPAL -->

<div id="principal">

    <?php

    if (!empty($todasLasEntradasCategoriaActual) && mysqli_num_rows($todasLasEntradasCategoriaActual) >= 1 ) :?>
        <h1>Entradas de <?= mysqli_fetch_assoc($todasLasEntradasCategoriaActual)['categoria'] ?></h1>
        <?php
        while ($entrada = mysqli_fetch_assoc($todasLasEntradasCategoriaActual)) :
            $palabra = $entrada['descripcion'];
            mysqli_data_seek($todasLasEntradasCategoriaActual,0);//Reiniciar el fetch_assoc
            ?>
            <a href="entrada.php?id=<?=$entrada['id']?>">
                <article class="entradas"><!-- Article es como un div, pero para los navegadores es semanticamente mejor -->
                    <h2><?=$entrada['titulo'];?></h2>

                    <span class="fecha"> <?= $entrada['categoria'] . " | " .$entrada['fecha']  ?> </span>
                    <p>
                        <?=
                        limitarPalabras($palabra, 7);
                        ?>
                    </p>
                </article>
            </a>
        <?php
        endwhile;
    else:
    ?>


    <div class="alerta" >No hay entradas en esta categoria</div>

    <?php endif; ?>

</div>


<?php require_once 'includes/pie.php' ?>

</body>
</html>
