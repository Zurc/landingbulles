<? 

$para = "cruzjurado@gmail.com";
$nombre = $_POST["username"];
$subject = "Enviado por ".$nombre." desde Bulles d'Or Landing Page";
$message = "Hola!, ".$_POST["username"]." ha confirmado su presencia para el evento. Su email es ".$_POST["useremail"];
$de = $_POST["useremail"];

$headers = "MIME-Version:1.0; \r\n";
$headers .= "Content-type: text/html; \r\n charset=utf-8";
$headers .= "From: $de \r\n";
$headers .= "To: $para; \r\n Subject:$subject \r\n";

?>