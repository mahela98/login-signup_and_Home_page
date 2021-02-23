<?php
// mail('donboos099@gmail.com','test','gggggggggggg3aoishd' , 'From: bookbrowser98@yahoo.com');
$vkey = "asdddddddd34asd";
$to = "yjasani6as44sd5q@gmailup.com" ;
$subject = "Email Validation Code";
$message = "<a href = 'http://http://localhost/my_test/sem_chandima/verified.php?vkey=$vkey'>Register Account</a>
</br>
<h1> BOOK BROWSER </h1> 
</br>
<p> Your verification key :  $vkey </p>
</br>
<p> Thankyou ! </p>

";
$headers = "From: bookbrowser98@yahoo.com \r\n";

$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";
mail($to,$subject,$message,$headers);