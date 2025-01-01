<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $phone = htmlspecialchars($_POST['phone']);


    echo "This is the data that the user submitted:";
    echo "<br>First name: $firstname";
    echo "<br>Last name: $lastname";
    // $to = "logan7design@gmail.com"; // Replace with your email address
    // $subject = "New Date Form Submission";
    // $message = "First Name: $firstname\nLast Name: $lastname\nPhone: $phone";
    // $headers = "From: DATEcage@gmail.com"; // Replace with a valid sender email

    // if (mail($to, $subject, $message, $headers)) {
    //     echo "Email sent successfully.";
    // } else {
    //     echo "Email sending failed.";
    // }
}
?>