<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "johnkentalusan@gmail.com";
    $subject = "New Form Submission";
    $headers = "From: $email";

    $mailBody = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    mail($to, $subject, $mailBody, $headers);
}
?>
