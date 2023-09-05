<?php
    //get data from form  
    $name = $_POST['name'];
    $email= $_POST['email'];
    $message= $_POST['message'];
    $to = "088878@glr.nl";
    $subject = $_POST['subject'];
    $txt = $name . "\r\n" . $email . "\r\n" . $message;
    $headers = "From: " . $_POST['email'];
    $txt2 = "Bedankt voor je vraag, we komen zo snel mogelijk bij je terug." . "\r\n" . "\r\n" . $name . "\r\n" . $email . "\r\n" . "\r\n" . $message;
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
        mail($email,$subject,$txt2,$headers);
    }
// }

header("Location:index.php");
?>