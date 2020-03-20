
<?php include 'includes/cabecera.php'
/**
 * Es mejor usar el require debido a que es mas estricto,
 * el once por ejemplo include_once hace referencia a que solo se puede agregar 1 sola vez sin importar
 * cuantas veces se añada.
 *
 * El require NO permitira la ejecucion de la página completamente en caso de NO encontrar el fichero
 */
?>

<!-- Contenido -->
<div>
    <h2>Esta es la página de Contactos</h2>
    <p>Texto de prueba</p>
</div>

<!-- Pie de página -->
<footer>

    Todos los derechos reservados &copy; Adrian Hoyos <?=date('Y')?>

</footer>

</body>
</html>