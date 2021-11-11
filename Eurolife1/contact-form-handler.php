<?php
    $name = $_POST['name'];
    $name2 = $_POST['name2'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $name3 = $_POST['name3'];

    $email_subject = "New Form Submission";

    $email_body = "User name: $name.\n".
                    "User name: $name2.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n".
                        "Consulstant: $name3.\n";

                        
    $to = "thegamefan36@gmail.com";
   
    $option = isset($_POST['name3']) ? $_POST['name3'] : false;
    if ($option) {
       echo htmlentities($_POST['name3'], ENT_QUOTES, "UTF-8");
    } else {
      echo "task option is required";
      exit; 
    }

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers,$option);

    header("Location: kontakti.html");
?>