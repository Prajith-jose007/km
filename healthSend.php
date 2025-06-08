<?php
$to = "prajith.it.dutch@gmail.com"; // Replace with your email
$subject = "Simple Test";
$message = "This is a basic test.";
$headers = "From: prajithjose007@gmail.com"; // Replace with a domain email

if (mail($to, $subject, $message, $headers)) {
    echo "Mail sent!";
} else {
    echo "Mail failed!";
}
?>