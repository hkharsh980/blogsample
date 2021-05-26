<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$Correo = new PHPMailer();
  $Correo->IsSMTP();
  $Correo->SMTPAuth = true;
  $Correo->SMTPSecure = "tls";
  $Correo->Host = "smtp.gmail.com";
  $Correo->Port = 587;
  $Correo->Username = "bbabaofficial@gmail.com";  //Enter your gmail id
  $Correo->Password = "hkdon400";               //Enter you gmail password
  $Correo->SetFrom('bbabaofficial@gmail.com');       //Enter from 
  $Correo->FromName = "no-reply";
  $Correo->AddAddress($_post['mail']);
  $Correo->Subject = "Contact us";
  $Correo->Body = "<H3>Thank you".$_post['name']." for contacting us. We will revert back to you soon.</H3>";
  $Correo->IsHTML (true);
  if (!$Correo->Send())
  {
    echo "Error: $Correo->ErrorInfo";
  }


?>
<html>
<head>
  <title>Thanks for contacting us</title>
  <link rel="stylesheet" href="style.css">
  <style type="text/css">
    div{
      margin:auto;
    }
    body{
      background-color: #e3fae8;
    }
  </style>
</head>
<body>
</body>
</html>