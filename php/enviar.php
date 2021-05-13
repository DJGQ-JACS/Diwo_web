<?php
header("Content-type: text/html;charset=\"utf-8\"");
$name = $_POST['name'];
$mail = $_POST['email'];
$subject = $_POST['asunto'];
$message = $_POST['mensaje'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $name . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Asunto: " . $subject . " \r\n";
$mensaje .= "Mensaje: " . $message . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'mando.ces@gmail.com';
$asunto = 'Mensaje de mi sitio web';

if (mail($para, $asunto, utf8_decode($mensaje), $header))
echo "<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";


?>