<?php require './views/includes/header.php'; ?>

<section class="contenedor background-image-login">

    <div class="header-image">
        <img src="<?=RAIZ?>/assets/images/logo.jpg" alt="asd">
    </div>

    <?php require './views/includes/menu.php'; ?>

    <div class="contenedor-body">
        <form class="formulario card" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <h2>Recuperar contraseña</h2>

            <div class="input-contenedor">
                <label for="correo">Correo electronico</label>
                <input type="email" id="correo" name="correo" placeholder="Escribir aqui" />
            </div>

            <div class="input-contenedor">
                <input type="submit" value="Enviar" />
            </div>
        </form>
    </div>

</section>

<?php require './views/includes/footer.php'; ?>