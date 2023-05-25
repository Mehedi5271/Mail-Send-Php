<?php 

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPmailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST['send'])){
    $mail = new PHPMailer(true);

    $mail->isSMTP();

    $mail->Host ='smtp.gmail.com';

    $mail->SMTPAuth = true;

    $mail->Username= 'amarullapara@gmail.com';
    $mail->Password='qalfpvhamidykgbq';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('amarullapara@gmail.com');

    $mail->addAddress($_POST['email']);

    $mail->isHTML(true);

    $mail->Subject = $_POST['subject'];

    $mail->Body= $_POST['message'];

    $mail->send();

    echo 
    "
    <script> 
    
    alert('Sent succesfull');
    document.location.href ='email.php';
    </script>

    ";
}



?>

