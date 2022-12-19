<?php session_start();

    require '../config.php';

    session_destroy();
    $_SESSION = [];

    header('Location: '.RAIZ);

?>