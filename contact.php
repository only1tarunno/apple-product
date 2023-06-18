<?php
// Retrieve form data
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set up email parameters
$to = 'recipient@example.com';  // Replace with your email address
$subject = 'New form submission';
$headers = "From: $name <$email>" . "\r\n";
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send email
if (mail($to, $subject, $body, $headers)) {
    echo 'Message sent successfully!';
} else {
    echo 'Message could not be sent.';
}
?>