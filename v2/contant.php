<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* If you installed PHPMailer without Composer do this instead: */

require './phpmailer/src/Exception.php';
require './phpmailer/src/PHPMailer.php';
require './phpmailer/src/SMTP.php';

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);
$errors = [];
$succes = [];
$response = [];
$filesOk = false;
/* Open the try/catch block. */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
   if (true) {
   date_default_timezone_set('Etc/UTC');

   $mail->Encoding = 'base64';
   $mail->CharSet = 'UTF-8';

   $mail->setFrom('formularz@aloe.pl', 'Formularz');
   $mail->addAddress('dawiduam@gmail.com');
   $mail->Subject = 'Wiadomość z formularza kontaktowego - ALOE';
   $mail->isHTML(false);

   if(empty($_POST['name'])){
      $response['errors']['name'] = "Wprowadź imię";
   }
   if(empty($_POST['tel'])){
      $response['errors']['tel'] = "Wprowadź numer telefonu";
   }
   if(empty($_POST['message'])){
      $response['errors']['message'] = "Wprowadź treść wiadomości";
   }

   if(!empty($_POST['important'])){
      $response['errors']['important'] = "Wystąpił problem podczas wysyłania formularza, prosimy spróbować ponownie";
   }

   $mail->Body = <<<EOT
Imię: {$_POST['name']}
Telefon: {$_POST['tel']}
Wiadomość: {$_POST['message']}
EOT;

   /* Finally send the mail. */
   if($response['errors']){
      echo json_encode($response);
      exit; 
   } else {
      if (!$mail->send()) {
         $response['succes']['status'] = 'false';
         $response['succes']['message'] = 'Niestety nie udało się wysłać wiadomości, spróbuj ponownie później.';
      } else {
         $response['succes']['status'] = 'true';
         $response['succes']['message'] = 'Dziękujemy, wiadomość została pomyślnie wysłana.'; 
      }
      echo json_encode($response);
      exit;
   }
   } else {
   $response['succes']['status'] = 'Błąd testu recaptcha';
   echo json_encode($response);
   }
}
?>