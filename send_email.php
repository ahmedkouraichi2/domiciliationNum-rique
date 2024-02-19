<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    // Email address to send the message to
    $to = "votrecourrier@acmservies.fr";

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Compose the message
    $body = "Name: " . $name . "\n";
 
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message;

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you for contacting us! We will get back to you soon.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // Redirect back to the contact form if accessed directly
    header("index.html");
}
?>