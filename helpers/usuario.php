<?php

    function registrarUsuario($con, $nombre, $apellido, $correo, $pass, $rol){
        $con->query("INSERT INTO usuarios VALUES(null, '$correo', '$nombre', '$apellido', null, '$pass', '$rol', null)");
    }

    function generatePassword($size) {
        $bytes = random_bytes($size);
        $password = bin2hex($bytes);
        return $password;
    }


    function recuperarUsuario($con, $correo, $rpass){
        $con->query("UPDATE usuarios SET rpass='$rpass' WHERE email = '$correo'");
    }

    function usuarios($con){
        $res = $con->query("SELECT * FROM usuarios WHERE public='si'");
        return $res->fetchAll();
    }

    function numberquestions($con, $id){
        $res = $con->query("SELECT COUNT(id) as total FROM respuestas WHERE usuario_id=$id");
        return $res->fetch(PDO::FETCH_ASSOC)['total'];
    }

?>