<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

function sendMailToBooking($fullname,$email,$phptime,$service){
    $SITE_URL="http://letstake.in/";

    $message = "<html><head> <title>Booking Success</title> </head <body>";
    $message .= '<h1>Hi ' . $fullname . '!</h1>';
    $message .= '<h2>Thank you for the Booking at Strathfield Salon and Barbershop</h2>';
    $message .= '<h3>Booking Details</h3>';
    $message .= "<h3>Date & Time: $phptime</h3>";
    $message .= "<h3>Services : $service</h3>";
    $message .= '<p>You can update the booking details minimum 5 Hrs of booking time</p>';
    $message .= "</body></html>";

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail -> SMTPDebug = 0;
    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = 'ssl';
    $mail->Host = 'mail.letstake.in';
    $mail->port = 587;
    $mail->isHTML(true);

    $mail->Username = 'info@letstake.in';
    $mail->Password = 'barbershop#1024';

    $mail->setFrom('info@letstake.in','Strathfield Salon & BarberShop');
    $mail->addReplyTo('info@letstake.in');
    $mail->addAddress($email);

    $mail->Subject = "Strathfield Salon & BarberShop Booking Details";
    $mail->Body = $message;
    return $mail->send();
}

function sendMailToActivateAccount($fullname,$email){
    $SITE_URL="http://letstake.in/";

    $message = "<html><head> <title>Account Activation</title> </head <body>";
    $message .= '<h1>Hi ' . $fullname . '!</h1>';
    $message .= '<h2>Welcome to Strathfield Salon and Barbershop</h2>';
    $message .= '<p><a style="text-decoration:none;padding:10px;background-color:#284ea0;color:#fff;" href="'."http://localhost/barber-shop/".'activateAccount.php?id=' . base64_encode($email) . '">CLICK TO ACTIVATE YOUR ACCOUNT</a>';
    $message .= "</body></html>";

$mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail -> SMTPDebug = 0;
    $mail->SMTPAuth = true;
    //$mail->SMTPSecure = 'ssl';
    $mail->Host = 'mail.letstake.in';
    $mail->port = 587;
    $mail->isHTML(true);

    $mail->Username = 'info@letstake.in';
    $mail->Password = 'barbershop#1024';

    $mail->setFrom('info@letstake.in','Strathfield Salon & BarberShop');
    $mail->addReplyTo('info@letstake.in');
    $mail->addAddress($email);

    $mail->Subject = "Strathfield Salon & BarberShop Account Activation";
    $mail->Body = $message;
    return $mail->send();
}
?>
