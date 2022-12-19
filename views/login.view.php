<?php require './views/includes/header.php'; ?>

<section class="contenedor background-image-login">

    <div class="header-image">
        <img src="<?=RAIZ?>/assets/images/logo.jpg" alt="asd">
    </div>

    <?php require './views/includes/menu.php'; ?>

    <div class="contenedor-body">
        <form class="formulario card" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <h2>Iniciar Sesión</h2>

            <div class="input-contenedor">
                <label for="usuario">Nombre de usuario</label>
                <input type="text" id="usuario" name="usuario" placeholder="Escribir aqui" />
            </div>

            <div class="input-contenedor">
                <label for="pass">Contraseña</label>
                <input type="password" id="pass" name="pass" placeholder="Escribir aqui" />
            </div>

            <div class="input-contenedor">
                <input type="submit" value="Ingresar" />
            </div>

            <a class="enlace_rec" href="<?=RAIZ?>/recuperar.php">¿Olvidaste tu contraseña?</a>
        </form>
    </div>

</section>

<?php require './views/includes/footer.php'; ?>