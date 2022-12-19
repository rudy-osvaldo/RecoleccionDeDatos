<?php require './views/includes/header.php'; ?>

<section class="contenedor background-image-gente">

    <div class="header-image">
        <img src="<?=RAIZ?>/assets/images/logo.jpg" alt="asd">
    </div>

    <?php require './views/includes/menu.php'; ?>

    <div class="contenedor-body">
        <fieldset>
            <legend>
                <h2><?=$group['title']?></h2>
            </legend>

            <form id="formulario" class="formulario-question card" action="<?=$action_form?>" method="POST">
                <?php foreach($response as $index=>$item): ?>
                    <div class="content-questions">
                        <p class="title-question"><?=($item['index'] > 0 ? $item['index'].'.' : '')?> <?=$item['title']?></p>

                        <?php showNote($item['note-head']); ?>

                        <div class="content-inputs">
                            <?php if($item['class'] == "questions-list-option"): ?>
                                <p>SI &nbsp;&nbsp;NO</p>
                            <?php endif; ?>

                            <?php require './views/includes/input.php'; ?>
                        </div>

                        <?php showNote($item['note-footer']); ?>
                    </div>
                <?php endforeach; ?>
            </form>
            
            </fieldset>
            <div class="question-action">
                
                <?php if($_GET['group'] == 1 && $_GET['page'] == 1): ?>
                    <a href="<?=RAIZ?>" class="btn-next-previous" form="formulario">Menu Inicio</a>
                <?php else: ?>
                    <a href="<?=RAIZ?>/<?=previousPage($number_pages_pre)?>" class="btn-next-previous" form="formulario">Anterior</a>
                <?php endif; ?>


                <?php if($_GET['group'] == 3 && $_GET['page'] == 22): ?>
                    <button type="submit" class="btn-next-previous" form="formulario" id="btn-next">Registrar respustas</button>
                <?php else: ?>
                    <button type="submit" class="btn-next-previous" form="formulario" id="btn-next">Siguiente</button>
                <?php endif; ?>
            </div>
    </div>

</section>

<?php require './views/includes/footer.php'; ?>