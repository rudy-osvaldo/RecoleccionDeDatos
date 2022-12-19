<?php session_start();

    require '../config.php';
    require '../helpers/questions.php';
    require '../helpers/valueStatus.php';
    require '../helpers/querys.php';
    require '../helpers/session.php';

    verify();

    $response = json_read_all();

    $response_arreglo = [];

    foreach($response as $res){
        foreach($res as $item){
            array_push($response_arreglo, $item);
        }
    }

    if(save_question($_CONEXION, $response_arreglo)){
        json_clear();
        header('Location: '.RAIZ);
    }

?>