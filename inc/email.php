<?php

$name = $_POST['Name'];
$phone= $_POST['Phone'];
$email = $_POST['Email'];
$msg = $_POST['Message'];

$theEmail = "You have received a new message from ".$name.". \n\n Their contact info:\n Phone: ".$phone."\n Email: ".$email."\n\n\n Message:'".$msg."'";

//$to = "admin@structureclinic.ca"; 
$to = "andrewgphillips74@gmail.com"; 
$subject = "New site inquiry";
$txt = $theEmail;
$headers = "From: admin@structureclinic.ca" . "\r\n" .

mail($to,$subject,$message,$headers,$parameters);

?>