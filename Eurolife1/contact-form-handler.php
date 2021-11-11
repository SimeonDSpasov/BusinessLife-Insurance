<?php
    $name = $_POST['name'];
    $name2 = $_POST['name2'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $name3 = $_POST['name3'];

    $email_subject = "Нов контакт";

    $email_body = "Име: $name.\n".
                    "Фамилия: $name2.\n".
                    "И-мейл: $visitor_email.\n".
                        "Доплънително съобщение: $message.\n".
                        "Връзка с консултант: $name3.\n";

                        
    $to = "businesslifeinsurance.bg@gmail.com";
   
  

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: kontakti.html");
?>