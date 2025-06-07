<?php 
  
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  require "vendor/autoload.php";

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;

  $mail = new PHPMailer(true);

  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;



  $mail->isSMTP();
  $mail->SMTPAuth = true;


  $mail ->Host ="smtp.gmail.com";
  $mail ->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  $mail->Port = 587;


  $mail->Username = "mwewashapi7792@gmail.com";
  $mail->Password = "bqnn jrfv tesn mpzr";

  $mail->setFrom($name, $email);
  $mail->addAddress("mwewashapi7792@gmail.com", "shapi");

  $mail ->Subject = $subject;
  $mail->Body =$message;



  $mail->send();

session_start();

$_SESSION['message'] = "message has been sent! press ok to continue";

header("Location: index.php");

 ?>