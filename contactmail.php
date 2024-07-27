<?php
$id = $_POST["id"];
$name = $_POST["name"];
$uemail = $_POST["email"];
$reply = $_POST["reply"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\salon\phpmailer\src\Exception.php';
require 'C:\xampp\htdocs\salon\phpmailer\src\PHPMailer.php';
require 'C:\xampp\htdocs\salon\phpmailer\src\SMTP.php';

$mail = new PHPMailer(true);

$email = 'shahinshaikh3010@gmail.com';
$password = 'xrxzgybgesrlbuzu';

try {
    // Configure SMTP settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Recipient information
    $mail->setFrom($email, 'Beautiesuit');
    $mail->addAddress($uemail, $name);
    $mail->addReplyTo($email, 'Beautiesuit');

    //Attachments
    //Add attachments
    // $mail->addAttachment('Chrysanthemum.jpg', 'Chrysanthemum.jpg');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Reply for your query from Beautiesuit.';
    $mail->Body = $reply;

    $mail->send();
    header("Location:query.php");
} catch (Exception $e) {
    echo 'Failed to send email: ', $mail->ErrorInfo;
}
?>