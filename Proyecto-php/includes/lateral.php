
<!-- BARRA LATERAL -->
<aside id="sidebar">

    <div id="buscar" class="bloque">
        <h3>Buscar</h3>

        <form action="buscar.php" method="post">

            <input type="text" name="busqueda">

            <input type="submit" value="Buscar">
        </form>
    </div>

    <?php if(isset($_SESSION['usuario'])) : ?>
        <div id = "usuario-logueado" class="bloque">
            <h3>Bienvenido <?= $_SESSION['usuario']['nombre'].' '.$_SESSION['usuario']['apellidos']; ?></h3>
            <!-- Botones -->
            <a href="cerrar.php" class="boton boton-rojo">Cerrar sesion</a>
            <a href="crear-categorias.php" class="boton boton-naranja">Crear categorias</a>
            <a href="mis-datos.php" class="boton boton-verde">Mis datos</a>
            <a href="crear-entradas.php" class="boton">Crear entradas </a>
        </div>
    <? endif; ?>

    <?php if(!isset($_SESSION['usuario'])) : ?>
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

    <?php endif; ?>

</aside>