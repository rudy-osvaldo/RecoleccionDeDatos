<?php require './views/includes/header.php'; ?>

<section class="contenedor background-image-gente">

    <div class="header-image">
        <img src="<?=RAIZ?>/assets/images/logo.jpg" alt="asd">
    </div>

    <?php require './views/includes/menu.php'; ?>

    <div class="contenedor-body">
        <div class="card">

            <div class="questions-actions-estadistica">
                <a href="<?=RAIZ?>/registro.php">Registrar nuevo usuario</a>
            </div>
        
            <table class="table-usuarios">
                <tr>
                    <th>Correo</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>N° Escuestas</th>
                </tr>

                <?php foreach($usuarios as $user): ?>
                    <tr>
                        <td><?=$user['email']?></td>
                        <td><?=$user['nombres']?></td>
                        <td><?=$user['apellidos']?></td>
                        <td><?=numberquestions($_CONEXION, $user['id'])?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            
        </div>

    </div>

</section>

<?php require './views/includes/footer.php'; ?>