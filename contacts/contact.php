<?php

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myMail = "taborotap@gmail.com";
    $header = "From: " . $email;
    $message2 = "You have received a message from " . $name . ". \n\n". $message;


    //1 e-mail your sending it to 
    //2 subject
    //3 is the message
    mail($myMail, $subject, $message2, $header);
    header("Location: index.php?mailsent");
     
}

?>