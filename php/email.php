<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "wjhackett7@gmail.com";
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $headers = "From: " . $_POST["email"];

    if (mail($to_email, $subject, $message, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>
