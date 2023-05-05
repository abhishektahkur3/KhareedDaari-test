<?php
         $to = "kunalchandel773@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message = "<h1>This is headline.</h1>";
       //  $mail->setFrom('abhishekthakur0424@gmail.com', 'From abhishek');

       //  $header = "From:abhishekthakur0424@gmail.com \r\n";
//         $header .= "Cc:afgh@somedomain.com \r\n";
         $header = "MIME-Version: 1.0\r\n";
         $header = "Content-type: text/html\r\n";
         ini_set('SMTP','smtp.gmail.com');
         ini_set('smtp_port',587);

         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>