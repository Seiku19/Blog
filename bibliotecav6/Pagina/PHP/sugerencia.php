<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Esto si lo has instalado con composer
require '../../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->SMTPSecure = 'tls';
    $mail->SMTPOptions = array(                                 //añadido porqué daba error al conectarse al host
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'emailparapruebas19@gmail.com';                     // SMTP username
    $mail->Password   = 'passwordprueba';                               // SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
    //Recipients
    $mail->setFrom('jesusgamer19@gmail.com', $_SESSION["usuario"]);
    $mail->addAddress('jesusgamer19@gmail.com', $_SESSION["usuario"]);     // Add a recipient
  
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $_REQUEST["asunto"];
    $mail->Body    = $_REQUEST["mensaje"];
    $mail->AltBody = '';
    
    $mail->send();
    
    echo "Mensaje enviado";

} catch (Exception $e) {

	echo "Error el mensaje no ha podido enviarse";

}

