<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Process the received data (you can customize this part)
    // For demonstration, we'll just return a simple response
    $response = "Merci $name, votre message a été reçu !";
    echo $response;
}
?>
