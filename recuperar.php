<?php session_start();

    require './config.php';
    require './helpers/usuario.php';
    session_destroy();
    $_SESSION = [];


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php'; 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mail = new PHPMailer(true);
        $code = generatePassword(12);
        $correo = $_POST['correo'];

        recuperarUsuario($_CONEXION, $correo, $code);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'isaias0chavez@gmail.com';
            $mail->Password   = 'xcuwnwgpfvvrtdje';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;                                    
    
            $mail->setFrom('isaias0chavez@gmail.com', 'Censo Bolivia');
            $mail->addAddress($correo, $correo);
        
            $contenido = '<br/><br/> Para recuperar tu contraseña ingresa al siguiente enlace ';
            $contenido .= '<a href="'.RAIZ.'/asignar.php?type=rec&code='.$code.'&email='.$correo.'"> Click aquí</a>';

            $mail->isHTML(true);
            $mail->Subject = 'Recuperar contraseña';
            $mail->Body    = $contenido;
            $mail->send();

        } catch (Exception $e) {

        }
    }


    require './views/recuperar.view.php';
?>