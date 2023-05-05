<?php

   $to = "kunalchandel773@gmail.com";
   $subject = "This is subject";
   
   $message = "<b>This is HTML message.</b>";
   $message .= "<h1>This is headline.</h1>";

   $header = "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $header .= "From: abhishekthakur0424@gmail.com\r\n";

   $smtp_server = 'smtp.gmail.com';
   $smtp_port = 587;
//    ini_set('SMTP', 'smtp.gmail.com');
//    ini_set('smtp_port', 587);
//    ini_set('sendmail_from', 'abhishekthakur0424@gmail.com');
//    ini_set('smtp_user', 'abhishekthakur0424@gmail.com');
//    ini_set('smtp_pass', 'your_gmail_password');
//    ini_set('tls', 'true');
//    ini_set('SMTP', 'smtp.gmail.com');
ini_set('smtp_port', 587);
ini_set('sendmail_from', 'abhishekthakur0424@gmail.com');
ini_set('smtp_user', 'abhishekthakur0424@gmail.com');
ini_set('smtp_pass', 'Abhi@45.Thakur');
ini_set('tls', 'true');
$smtp_conn = fsockopen($smtp_server, $smtp_port, $errno, $errstr, 30);
fputs($smtp_conn, "STARTTLS\r\n");
$smtp_response = fgets($smtp_conn, 4096);


 $retval = mail($to, $subject, $message, $header, "-f abhishekthakur0424@gmail.com -S smtp=$smtp_server -S smtp_port=$smtp_port");
   
   if ($retval == true) {
      echo "Message sent successfully...";
   } else {
      echo "Message could not be sent...";
   }
?>
