<?php session_start();

    require './config.php';
    require './helpers/questions.php';
    require './helpers/valueStatus.php';

    require './helpers/session.php';
    verify();

    groupValidate($_QUESTIONS);
    
    
    $group = $_QUESTIONS[$_GET['group']-1];
    $questions = $group['questions'];
    $number_pages = count(unique_multidim_array($questions, "page"));

    $number_pages_pre = $_GET['group']-2 > 0 ? count(unique_multidim_array($_QUESTIONS[$_GET['group']-2]['questions'], "page")) : 1;

    if(!isset($_GET['page'])){
        header('location: '.RAIZ.'/questions.php?group=1&page=1');
    }


    $response = [];
    $carga = false;

    foreach($questions as $item){
        if($item['page'] == $_GET['page']){
            $carga = true;
            array_push($response, $item);
        }
    }

    if(!$carga){
        header("location: ".RAIZ."/questions.php?group=page=1&page=1");
    }

    $position_input = 1;

    $action_form = RAIZ.'/services/temp.php?group='.$_GET['group'].'&page='.$_GET['page'].'&inputs='.countInputs($response).'&current='.$number_pages;

    require './views/question.view.php';
?>