<?php session_start();

    require '../config.php';
    require '../helpers/questions.php';
    require '../helpers/valueStatus.php';
    require '../helpers/session.php';


    foreach($_POST as $key=>$item){
        if(empty($item)){
            $_POST[$key] = '';
        }
    }

    $countres = $_GET['inputs'];

    $ref = "page-".$_GET['group']."-".$_GET['page'];

    json_save($ref, $_POST);

    if($_GET['group'] == 3 && $_GET['page'] == 22){
        header("Location: ".RAIZ.'/guardarEncuesta.php');
    }else{
        header("Location: ".RAIZ."/".nextPage($_GET['current']));
    }

?>