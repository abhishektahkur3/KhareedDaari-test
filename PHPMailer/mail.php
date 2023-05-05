<?php

$to = "kunalchandel773@gmail.com";
$subject = "Test Email";
$body = "This is a test email.";

$smtp_host = "smtp.gmail.com";
$smtp_port = 587;
$smtp_username = "abhishekthakur0424@gmail.com";
$smtp_password = "Abhi@45.Thakur";

$headers = array(
    "From: abhishekthakur0424@gmail.com",
    "Reply-To: kunalchandel773@gmail.com",
    "MIME-Version: 1.0",
    "Content-type: text/plain; charset=iso-8859-1"
);

// Set the SMTP configuration
ini_set("SMTP", $smtp_host);
ini_set("smtp_port", $smtp_port);
ini_set("auth_username", $smtp_username);
ini_set("auth_password", $smtp_password);

// Connect to the SMTP server
$smtp_connection = fsockopen($smtp_host, $smtp_port, $errno, $errstr, 30);

// Send the EHLO command to initiate the SMTP session
fputs($smtp_connection, "EHLO $smtp_host\r\n");

// Authenticate with the SMTP server
fputs($smtp_connection, "AUTH LOGIN\r\n");
fputs($smtp_connection, base64_encode("$smtp_username") . "\r\n");
fputs($smtp_connection, base64_encode("$smtp_password") . "\r\n");

// Set the "From" address
fputs($smtp_connection, "MAIL FROM:abhishekthakur0424@gmail.com\r\n");

// Set the "To" address
fputs($smtp_connection, "RCPT TO:<$to>\r\n");

// Send the email message
fputs($smtp_connection, "DATA\r\n");
fputs($smtp_connection, implode("\r\n", $headers) . "\r\n\r\n");
fputs($smtp_connection, "$body\r\n.\r\n");

// Close the SMTP connection
fputs($smtp_connection, "QUIT\r\n");
fclose($smtp_connection);

echo "Email sent successfully!";

?>
