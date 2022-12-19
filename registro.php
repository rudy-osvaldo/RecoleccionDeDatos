<?php session_start();

    require './config.php';
    require './helpers/session.php';
    require './helpers/usuario.php';

    verify();
    verifyadmin();

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php'; 
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mail = new PHPMailer(true);
        $code = generatePassword(12);
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $correo = $_POST['correo'];
        $rol = $_POST['rol'];

        registrarUsuario($_CONEXION, $nombre, $apellido, $correo, $code, $rol);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'isaias0chavez@gmail.com';
            $mail->Password   = 'xcuwnwgpfvvrtdje';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port       = 465;                                    
    
            $mail->setFrom('isaias0chavez@gmail.com', 'Censo Bolivia');
            $mail->addAddress($correo, $nombre);
        
            $contenido = 'Estimado (a) '.$nombre.' '.$apellido;
            $contenido .= ' su cuenta fue creada con el correo electronico: '.$correo;
            $contenido .= '<br/><br/> Para crear su contraseña de acceso, solo entre al siguiente enlace';
            $contenido .= '<a href="'.RAIZ.'/asignar.php?type=reg&code='.$code.'&email='.$correo.'"> Click aquí</a>';

            $mail->isHTML(true); 
            $mail->Subject = 'Registro de usuario - Censo Bolivia';
            $mail->Body    = $contenido;
            $mail->send();

        } catch (Exception $e) {

        }
    }


    require './views/registro.view.php';
?>