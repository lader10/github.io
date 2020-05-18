<?php
  $name = $_POST['name']
 $email = $_POST['email']
 $message = $_POST['message']


 $email_from = 'Lads Portfolio ';
 $email_subject = 'New Message from Client';
 $email_body = "Name: $name.\n".
              "Email: $email.\n".
              "Message: $message.\n";


$to="reginaderla@yahoo.com.ph";
$headers = "From: $email_from \r\n";
$headers .="Reply-To: $email \r\n";

mail{$to,$email_subject,$email_body,$headers};

header("location: index.html");

?>
