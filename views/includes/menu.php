<div class="header-menu">
    <a href="<?=RAIZ?>">Inicio</a>
    <?php if(isset($_SESSION['usuario'])): ?>
        <a href="<?=RAIZ?>/questions.php" class="resaltar">Encuestar</a>
        
        <?php if($_SESSION['usuario']['rol'] == 'admin'): ?>
            <a href="<?=RAIZ?>/usuarios.php">Usuarios</a>
        <?php endif; ?>
        <a href="<?=RAIZ?>/services/cerrar.php">Cerrar Sesión</a>
    <?php else: ?>
        <a href="<?=RAIZ?>/login.php">Iniciar Sesión</a>
    <?php endif; ?>
    <a href="<?=RAIZ?>/info.php">Preguntas frecuentes</a>
</div>