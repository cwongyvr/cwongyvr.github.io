<?php
if ($_POST) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $message  = $_POST['text'];
    $headers = "Email \r\n".$email."\r\n\r\nName \r\n".$name;
    
    //send email   
    mail("info@ewisemarketingideas.com", "email enquiry", $message, $headers);
}

?>