<?php 

$to  = 'pastorjt@gmail.com' . ', '; // note the comma
$to .= 'cruzjurado@gmail.com';

$name = $_REQUEST["username"];
$mail = $_REQUEST["useremail"];

$subject = "Enviado por $name ";
$subject .= " desde Bulles d'Or Landing Page";
$message = "Hola!, $name";
$message .= " ha confirmado su presencia para el evento. Su email es $mail" ;
$message .= ".";


mail($to, $subject, $message, "From: " . $_REQUEST["useremail"]);

?>
