<?php
    $email  = $_POST['email'];
    $feed = $_POST['feedback'];


    $to  = "rohitrjn629@gmail.com";
    $headers = "From: $email \r\n";
    $headers .= "Reply-To: $email\r\n";

    $email_subject = "New feedback from :$email";

    $email_body = "sender email: $email .\n".
                        "Feedback: $feed .\n";

    mail($to, $email_subject, $email_body, $headers);
    
    header("Location: index.html");
?>