<?php
//get data from form  
$name = $_POST['name'];
$Phone Number = $_POST['Mobile'];
$email= $_POST['emailaddress'];
$message-box= $_POST['Message'];
$to = "varshithinteriorsolutions@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name .  "\r\n  Mobile = " . $Phone Number ."\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
