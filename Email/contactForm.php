<?php
    $name = $_POST['name'];
    $email = $Post['email'];
    $message = $Post['message'];

    $email_form = 'mgonzalez4231@gmail.com';
    $email_subject = "New Form Submission";
    $email_body ="User Name: $name. \n" . "User Email: $email. \n" . 
        "User Message: $message. \n";
    $to = "mgonzalez4231@gmail.com";
    $headers = "From: $email_form \r\n";
    $headers .= "Reply-to: $email \r\n";

    if(mail($to, $email_subject, $email_body, $headers)){
       header("Location: thankYou.html");
   }else{
       header("Location: error.html");
   }


?>
