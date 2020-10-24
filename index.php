 
<?php
header("Location: https://simarpreet.design/");
#Receive user input
$email_address = $_POST['email'];
$message = $_POST['message'];
$name= $_POST['name'];



#Send email
$headers = "From: mesimarpreet@gmail.com";
$to="mesimarpreet@gmail.com";
$email_subject="New Connection!";
$email_body = "You have received a new message from the user $name and $email_address .\n"."Here is the message:\n $message";
$sent = mail($to,$email_subject, $email_body, $headers);

?>
