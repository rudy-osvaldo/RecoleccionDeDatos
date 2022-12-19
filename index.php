<?php session_start();

    require './config.php';
    require './helpers/session.php';
    require './helpers/valueStatus.php';
    require './helpers/querys.php';

    json_clear();
    
    require './views/inicio.view.php';
?>