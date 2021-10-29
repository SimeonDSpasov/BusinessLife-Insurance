<?php
    $name = $_POST['name'];
    $name2 = $_POST['name2'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_subject = "New Form Submission";

    $email_body = "User name: $name.\n".
                    "User name: $name2.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

                        
    $to = "thegamefan36@gmail.com";

   

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: kontakti.html");
?>