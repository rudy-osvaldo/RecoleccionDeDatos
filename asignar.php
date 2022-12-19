<?php session_start();

    require './config.php';
    require './helpers/usuario.php';
    session_destroy();
    $_SESSION = [];

    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $pass = $_POST['pass'];
        $pass2 = $_POST['pass2'];
        $correo = $_GET['email'];
        $code = $_GET['code'];
        $newcode = generatePassword(12);

        if($pass == $pass2){
            $res = $_CONEXION->query("SELECT * FROM usuarios WHERE  email='$correo'")->fetch(PDO::FETCH_ASSOC);
                
            if($code == $res['rpass']){
                $_CONEXION->query("UPDATE usuarios SET pass='$pass', public='si', rpass='$newcode' WHERE  email='$correo'");
            }
        }

        header('Location: '.RAIZ);
    }


    require './views/asignar.view.php';
?>