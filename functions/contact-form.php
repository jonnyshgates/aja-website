<?php

// create array with contact form inputs
$newContact = array(
  'name' => $_POST['name'],
  'telephone' => $_POST['telephone'],
  'email' => $_POST['email'],
  'addinfo' => $_POST['addinfo'],
  );

//create variables for email
$subject = 'New website lead. ' .$newContact['name'];
$headers = "From: AJA Domestic Services\r\nMIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
$message .= '<p> Someone has filled in the web form.</p>';
$message .= '<p> Name: ' .$newContact['name'] .'.</p>';
$message .= '<p> Number: ' .$newContact['telephone'] .'.</p>';
$message .= '<p> Email Address: ' .$newContact['email'] .'.</p>';
$message .= '<p> Additional Info: ' .$newContact['addinfo'] .'.</p>';
$message .= '</body></html>';

$message = wordwrap($message, 70);

//send email

mail("jonathan.sh.gates@gmail.com",$subject,$message,$headers);
?>