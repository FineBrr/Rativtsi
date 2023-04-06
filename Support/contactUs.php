<?php

$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = 'kisdavid2004@gmail.com';
$headers = "From:" . $mailFrom;
$txt = "You have received an e-email from" . $name . "./n/n" . $message;
mail($mailTo, $subject, $txt, $headers);
header("Location: ../index.html");
