<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = $email;
    $email_subject = "Message From Portfolio";
    $email_body = $message;
    $to = "qureshiusama796@gmail.com";
    $header = "From: $email_from\r\n";
    $header .="Reply-To: $email \r\n";
    mail($to,$email_subject,$message,$header);
    header("Location: index.html");

?>