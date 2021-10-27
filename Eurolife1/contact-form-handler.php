<?php
    $name = $_Post['name'];
    $name2 = $_Post['name2'];
    $visitor_email = $_Post['email'];
    $message = $_Post['message'];

    $email_from = 'thegamefan36@gmail.com';

    $email_subject = "New Form Submission";

    $email_body = "User name: $name. \n".
                    "User name: $name2. \n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

                        
    $to = "thegamefan36@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: kontakti.html");
?>