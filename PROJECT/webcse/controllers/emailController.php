<?php

require_once 'vendor/autoload.php';
require_once 'config/constants.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

function sendVerificationEmail($userEmail, $token) 
  {
    global $mailer;

    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Verify email</title>
    </head>
    <body>
        <div class="wrapper">
            <p>
              Cảm ơn bạn đã đăng ký trên trang web của chúng tôi! Vui lòng nhấp vào liên kết bên dưới để xác minh email của bạn.
            </p>
            <a href="http://localhost/webcse/index_mail.php?token=' . $token . '">
              Xác minh địa chỉ email của bạn
            </a>
        </div>  
    </body>
    </html>';

    // Create a message
    $message = (new Swift_Message('Xác minh địa chỉ email của bạn'))
    ->setFrom(EMAIL)
    ->setTo($userEmail)
    ->setBody($body, 'text/html');

    // Send the message
    $result = $mailer->send($message);
  }
   
?>