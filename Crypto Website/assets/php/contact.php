<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="From: " . $name ."\n" . "Email: " .$email. "\n" ."Phone: ". $phone .   "\n Message:" . $message;
$recipient = "contact@bespokeanalytical.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: http://www.bespokeanalytical.com/contact.html');
echo('message sent')


?>