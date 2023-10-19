<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senderEmail = $_POST["sender77"];
    $message = $_POST["message77"];
    
    $to = "sabrineessaket@gmail.com";
    $subject = "Contact Form Submission";
    $headers = "From: $senderEmail";
    
    // Send the email
    mail($to, $subject, $message, $headers);
    
    // You can add a success message or redirect the user to a thank you page here.
}
?>
