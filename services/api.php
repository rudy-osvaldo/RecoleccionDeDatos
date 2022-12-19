<?php

require '../config.php';
require '../helpers/questions.php';
require '../helpers/querys.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Content-Type: application/json; charset=UTF-8");


echo json_encode(db_questions_get($_CONEXION));

?>