<?php require_once 'includes/cabecera.php'; ?>
<?php require_once 'includes/lateral.php' ?>

<!-- CAJA PRINCIPAL -->

<div id="principal">

    <h1>Todas las entradas</h1>

    <?php
    $todasLasEntradas = conseguirEntradas($db);
    if (!empty($todasLasEntradas)) :
        while ($entrada = mysqli_fetch_assoc($todasLasEntradas)) :
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
    endif;
    ?>

</div>


<?php require_once 'includes/pie.php' ?>

</body>
</html>