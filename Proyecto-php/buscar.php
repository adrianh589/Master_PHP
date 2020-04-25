<?php

if(!isset($_POST['busqueda'])){
    header("Location: index.php");
}
?>

<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php' ?>

<!-- CAJA PRINCIPAL -->

<div id="principal">

    <h1>Busqueda: <?=$_POST['busqueda']?></h1>

    <?php

    $entradas = conseguirEntradas($db, null, null, $_POST['busqueda']) ;

    if (!empty($entradas) && mysqli_num_rows($entradas) >= 1 ) :?>
        <h1>Entradas de <?= mysqli_fetch_assoc($entradas)['categoria'] ?></h1>
        <?php
        mysqli_data_seek($entradas, 0);//Reiniciamos el fetch_assoc
        while ($entrada = mysqli_fetch_assoc($entradas)) :
            $palabra = $entrada['descripcion'];
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
