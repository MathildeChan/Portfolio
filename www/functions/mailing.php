<?php

use PHPMailer\PHPMailer\PHPMailer;

/**
 * Sends an e-mail using PHPMailer
 * @param string $from_address the sender address
 * @param string $from_name the sender name
 * @param string $to_address the recipient address
 * @param string $to_name the recipient name
 * @param string $subject the message subject
 * @param string $body the message body
 * @param string $altbody the alternative message body for non HTML clients
 * @return bool true if send is successful, false otherwise
 */
function send_mail(string $from_address, string $from_name, string $to_address, string $to_name, string $subject, string $body, string $altbody): bool
{
    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    // Server settings
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'mathildegore.squill.fr'; // Specify main and backup SMTP servers
    $mail->Port  = 465; // TCP port to connect to
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'contact@mathildegore.squill.fr'; // SMTP username
    $mail->Password = 'wRVQpefQ6MAg'; // SMTP password
    $mail->SMTPSecure = 'ssl'; // Enable TLS encryption, `ssl` also accepted

    //Set who the message is to be sent from
    $mail->setFrom($from_address, $from_name);
    $mail->addReplyTo($from_address, $from_name);

    //Set who the message is to be sent to
    $mail->addAddress($to_address, $to_name);

    //Set the encoding format
    $mail->CharSet = 'UTF-8';

    //Set the subject line
    $mail->Subject = $subject;

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML($body);
    $mail->AltBody = $altbody;

    if (!$mail->send())
        return false;
    else
        return true;
}