<?php require './views/includes/header.php'; ?>

<section class="contenedor background-image-login">

    <div class="header-image">
        <img src="<?=RAIZ?>/assets/images/logo.jpg" alt="asd">
    </div>

    <?php require './views/includes/menu.php'; ?>

    <div class="contenedor-body">
        <form class="formulario card" action="<?php echo $_SERVER['PHP_SELF']."?type=".$_GET['type']."&code=".$_GET['code']."&email=".$_GET['email']; ?>" method="POST">
            <h2>Asignar contraseña</h2>

            <div class="input-contenedor">
                <label for="pass">Contraseña nueva</label>
                <input type="password" id="pass" name="pass" placeholder="Escribir aqui" />
            </div>

            <div class="input-contenedor">
                <label for="pass2">Repetir contraseña</label>
                <input type="password" id="pass2" name="pass2" placeholder="Escribir aqui" />
            </div>

            <div class="input-contenedor">
                <input type="submit" value="Asignar contraseña" />
            </div>
        </form>
    </div>

</section>

<?php require './views/includes/footer.php'; ?>