<?php
$nombres = $_POST['nombre'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$servicio = $_POST['servicio'];
$contenido = $_POST['mensaje'];

$header = "From: " . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombres . ", \r\n";
$mensaje .= "El telefono es: " . $telefono . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Servicio: " . $servicio. " \r\n";
$mensaje .= "Mensaje: " . $contenido. " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'acevedohugoadrian@gmail.com'; // El mail a donde van a llegar los mensajes
$asunto = 'Mensaje de mi sitio web';
mail($para, $asunto, utf8_decode($mensaje), $header);
header('Location:index.html');

?>

