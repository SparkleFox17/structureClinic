<?php

$name = $_POST['Name'];
$phone= $_POST['Phone'];
$email = $_POST['Email'];
$msg = $_POST['Message'];

$option = 'phone or email.';

if(isset($_POST['option'])) {
    if ($_POST['option'] == 1) {
        $option = 'Phone';
    }else {
        $option = 'Email';
    }
}

$theEmail = "You have received a new message from ".$name.". \n\n Their contact info:\n Phone: ".$phone."\n Email: ".$email."\n\n\n Message:'".$msg."', they would prefer to be reached by ".$option."";

//$to = "admin@structureclinic.ca"; 
$to = "admin@structureclinic.ca"; 
$subject = "New site inquiry";
$txt = $theEmail;
$headers = "From: admin@structureclinic.ca" . "\r\n" .

mail($to,$subject,$txt,$headers,$parameters);

?>