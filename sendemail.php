<?php 
$to_email = "thankurabhi279@gmail.com";
$subject = "Simple Email Test by PHP";
$body = "Hi This is me ";
$headers ="from:abhishekthakur0424@gmail.com";
if(mail($to_email,$subject,$body,$headers)){
    echo "email sent sucessfully to $to_email....";
}
else{
   echo "email failed....";
}
?>
