<?php
$email_name = "wendybooth61";
$email_dom = "@gmail.com";"
$email_to = $email_name . $email_dom;
$name = $_POST["name"];
$email_from = $_POST["email"];
$message = $_POST["message"];
$email_subject = "Query re Black Hill Web Design";
$headers = "From: " . $email_from . "\n";
$headers .= "Reply-To: " . $email_from . "\n";
$message = "Name: ". $name . "\r\nMessage: " . $message;
ini_set("sendmail_from", $email_from);
$sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);
if ($sent)
{
header("Location: /thankyou.html");
} else {
echo "There has been an error sending your comments. Please try later.";
}
?>