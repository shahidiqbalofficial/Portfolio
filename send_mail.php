<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    // Email details
    $to = "shahidiqbalofficial.is@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMobile number: $number\nMessage:\n$message";
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Message Sent</title>
        </head>
        <body>
            <h1>Thank you for contacting me!</h1>
            <p>Your message has been sent successfully. I will get back to you soon.</p>
            <a href='contact.html'>Go back to the homepage</a>
        </body>
        </html>";
    } else {
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Message Failed</title>
        </head>
        <body>
            <h1>Message Sending Failed</h1>
            <p>Unfortunately, there was an error sending your message. Please try again later.</p>
            <a href='contact.html'>Go back to the homepage</a>
        </body>
        </html>";
    }
} else {
    echo "Invalid request.";
}
?>
