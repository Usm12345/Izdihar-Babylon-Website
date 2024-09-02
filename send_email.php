<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "contact@izdiharbabylon.com"; // Replace with your email address
    $subject = "Izdihar Website Msg";
    
    // Sanitize form data
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $mobile = htmlspecialchars($_POST["mobile"]);
    $subject = htmlspecialchars($_POST["subject"]);

    $message = htmlspecialchars($_POST["message"]);
    
    $body = "Full Name: $name\nEmail: $email\nMobile Number: $mobile\n\n Subject: $subject \n\nMessage:\n$message";
    
    // Additional headers
    $headers = "From: $email\r\n";
    
    // Send email
    mail($to, $subject, $body, $headers);

    // Redirect or display a thank you message
    header("Location: services.html"); // Replace with your thank you page
    exit();
}
?>
