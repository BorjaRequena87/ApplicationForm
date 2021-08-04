<?php

// Calling it
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$description = $_POST['description'];

// Email Data
$mailTo = "brequena87@gmail.com";
$subject = "Contact form";

$headers = "From: ".$email;
$text = "You have a new email from ".$name.".\n\n".$description;

// Sending Message
mail($mailTo, $subject, $text, $headers);
header('Location:send-message.html');

?>
