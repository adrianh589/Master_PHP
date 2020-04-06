
<?php require_once('helpers.php'); ?>

<!-- BARRA LATERAL -->
<aside id="sidebar">

    <?php if(isset($_SESSION['usuario'])) : ?>
        <div id = "usuario-logueado" class="bloque">
            <h3>Bienvenido <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>
            <!-- Botones -->
            <a href="cerrar.php" class="boton">Cerrar sesion</a>
            <a href="cerrar.php" class="boton boton-verde">Mis datos</a>
            <a href="cerrar.php" class="boton boton-naranja">Crear entradas </a>
        </div>
    <? endif; ?>

    <!-- LOGIN -->
    <div id="login" class="bloque">
        <h3>Identificate</h3>

        <?php if(isset($_SESSION['error_login'])) : ?>
            <div class="alerta-error">
                <?= $_SESSION['error_login']; ?>
            </div>
        <? endif; ?>

        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="password">Contraseña</label>
            <input type="password" name="password">

            <input type="submit" value="Entrar">
        </form>
    </div>

    <!-- REGISTRO -->
    <div id="register" class="bloque">
        <h3>Registrate</h3>

        <!-- Mostrar errores -->
        <?php if( isset($_SESSION['completado']) ) : ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado'] ?>
            </div>
        <?php elseif( isset($_SESSION['errores']['general']) ) : ?>
                <div class="alerta alerta-error">
                    <?= $_SESSION['errores']['general'] ?>
                </div>
        <?php endif; ?>

        <form action="registro.php" method="post">

            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
            <?= isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nombre') : '' ;?>

            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos">
            <?= isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellidos') : '' ;?>

            <label for="email">Email</label>
            <input type="email" name="email">
            <?= isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'email') : '' ;?>

            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <?= isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'password') : '' ;?>

            <input type="submit" name="submit" value="Registrar">
        </form>
        <?php borrarErrores(); ?>
    </div>

</aside>