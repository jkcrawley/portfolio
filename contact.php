<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "crawleydesign@hotmail.com";
    $headers = "From: " . $mailfrom;
    $txt = "You have recieved an email from " . $name . ".\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);

    header("Location: index.php?mailsend");
}

?>