<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['First Name']);
    $lastName = htmlspecialchars($_POST['Last Name']);
    $email = htmlspecialchars($_POST['Email']);
    $message = htmlspecialchars($_POST['Message']);

    $to = "c.lamia@wustl.edu"; // Replace with your email
    $subject = "New Maracas Capital Form Submission";
    $body = "You have received a new message from the contact form:\n\n" .
            "First Name: $firstName\n" .
            "Last Name: $lastName\n" .
            "Email: $email\n" .
            "Message:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent!";
    } else {
        echo "Failed to send email.";
    }
}
?>