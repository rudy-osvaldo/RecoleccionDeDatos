<?php

    function verify_public(){
        if(isset($_SESSION['usuario'])){
            header('Location: '.RAIZ);
        }
    }

    function verify(){
        if(!isset($_SESSION['usuario'])){
            header('Location: '.RAIZ.'/login.php');
        }
    }

    function verifyadmin(){
        if($_SESSION['usuario']['rol'] != 'admin'){
            header('Location: '.RAIZ);
        }
    }

?>