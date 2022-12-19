<?php session_start();

    require './config.php';
    require './helpers/session.php';
    require './helpers/valueStatus.php';
    require './helpers/querys.php';
    require './helpers/usuario.php';
    verify();
    verifyadmin();


    $usuarios = usuarios($_CONEXION);

    require './views/usuarios.view.php';
?>