<?php

    function conexion_db($db_config){
        try{
            return new PDO("mysql:host=".$db_config['host'].";port=".$db_config['port'].";dbname=".$db_config['name'], $db_config['user'], $db_config['pass']);
        }catch(PDOException $e){
            return $e;
        }
    }

?>