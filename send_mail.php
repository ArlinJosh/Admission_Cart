<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$mail = new PHPMailer(true);

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admission Form Submission</title>
    <style>
        body {
            background: linear-gradient(135deg, #dbeafe, #fef3c7);
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            color: #333;
        }
        .message-box {
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            display: inline-block;
        }
        .icon {
            font-size: 60px;
        }
        .success {
            color: green;
        }
        .error {
            color: red;
        }
        h3 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="message-box">';

try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'arlinjosh1402@gmail.com';      // Your Gmail
    $mail->Password = 'tlnz xwrz tenw dkvi';          // App password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('arlinjosh1402@gmail.com', 'Admission Portal');
    $mail->addAddress('arlinjosh1402@gmail.com');     // Receiver

    $mail->isHTML(true);
    $mail->Subject = 'New Admission Submission';

    $body = "<h3>New Admission Form Submission</h3>";
    foreach ($_POST as $key => $value) {
        $body .= "<strong>" . ucfirst(str_replace("_", " ", $key)) . ":</strong> " . htmlspecialchars($value) . "<br>";
    }

    $mail->Body = $body;

    $mail->send();
    echo '<div class="icon success">✔️</div>';
    echo "<h3>Thank you! Your application has been submitted successfully.</h3>";
} catch (Exception $e) {
    echo '<div class="icon error">❌</div>';
    echo "<h3>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</h3>";
}

echo '</div></body></html>';
