<?php
use PHPMailer\PHPMailer\PHPMailer;

require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';
require '../../PHPMailer/src/Exception.php';

$mail = new PHPMailer();
$mail->isSMTP();

$mail->SMTPAuth = true;

$mail->Port = 587;

$mail->Username = 'a4c3de3eb4f361';
$mail->Password = 'c572a3b84a35a9';

$mail->Host = 'smtp.mailtrap.io';







$mail->SMTPSecure = 'tls';



$mail->setFrom('04c48cb818-d36927@inbox.mailtrap.io');
$mail->addAddress('pierre.weissgerber05@gmail.com');

$mail->Subject = 'Mir wellen';
$mail->Body    = 'Mailen schecken';

$mail->send();

if($mail->send()){
    echo 'Message has been sent';
}else{
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}

?>