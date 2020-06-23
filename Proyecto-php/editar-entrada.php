<?php require_once 'includes/redireccion.php'; ?>
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

    <h1>Editar entrada</h1>

    <form action="guardar-entradas.php?editar=<?=$entradaActual['id']?>" method="POST">
        <p>Edita tu entrada <?= $entradaActual['titulo'] ?></p>
        <br>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="<?=$entradaActual['titulo']?>">
        <?= isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'titulo') : '' ;?>

        <label for="descripcion">Descripcion</label>
        <textarea type="text" name="descripcion"><?=$entradaActual['descripcion']?></textarea>
        <?= isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'descripcion') : '' ;?>

        <label for="categoria">Categoria</label>
        <select name="categoria">
            <?php $cateogrias = conseguirCategoria($db);
            if (!empty($cateogrias)) :
                while ($categoria = mysqli_fetch_assoc($cateogrias)) :
                    ?>
                    <option value='<?=$categoria['id']?>' <?= ($categoria['id'] == $entradaActual['categoria_id'] ) ? 'selected = "selected"' : '' ?>>
                        <?= $categoria['nombre'] ?>
                    </option>

                <?php
                endwhile;
            endif;
            ?>
        </select>
        <?= isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'categoria') : '' ;?>

        <input type="submit" value="Guardar">
    </form>

</div>


<?php require_once 'includes/pie.php' ?>

</body>
</html>
