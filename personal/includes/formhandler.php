<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];

    $to = "logan7design@gmail.com"; // Replace with your email address
    $subject = "New Date Form Submission";
    $message = "First Name: $firstname\nLast Name: $lastname\nPhone: $phone";
    $headers = "From: DATEcage@gmail.com"; // Replace with a valid sender email

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }
}
?>