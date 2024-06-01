<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $comment = htmlspecialchars($_POST['comment']);

    // Your email address
    $to = "your-email@example.com";

    // Subject of the email
    $subject = "New Comment from Your Website";

    // Message body
    $message = "Name: $name\n\nComment: $comment";

    // Email headers
    $headers = "From: noreply@yourdomain.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your comment!";
    } else {
        echo "There was an error sending your comment. Please try again later.";
    }
}
?>