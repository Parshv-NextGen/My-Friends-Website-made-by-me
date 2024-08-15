<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you can add code to send the form data via email or store it in a database
    // For demonstration, we'll just echo the data

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";
}
?>
