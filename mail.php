<?php
//get data from form  

$name = $_POST['fullname'];
$email= $_POST['email'];
$subject = $POST['subject'];
$message= $_POST['message'];
$to = "itzaayush@gmail.com";

$txt ="Name = ". $name . "\r\n  Email = ". $email . "Subject = ". $subject . "\r\n Message =" . $message;
$headers = "From: ". $email . "\r\n" ."CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>