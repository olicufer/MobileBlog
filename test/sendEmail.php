<?php
//incluimos libreria
require_once('../librerias/PHPMailer/PHPMailerAutoload.php');

//crear un objeto de la libreria PHPMailer
$mail = new PHPMailer();
//indico a la clase que use SMTP
$mail->IsSMTP();
//permite modo debug para ver mensajes de las cosas que van ocurriendo
//$mail->SMTPDebug = 2;
//Debo de hacer autenticación SMTP
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";

//indico el servidor de Gmail para SMTP
$mail->Host = "smtp.gmail.com";
//indico el puerto que usa Gmail
$mail->Port = 465;

//indico un usuario / clave de un usuario de gmail
$mail->Username = "gaizkamontero20@gmail.com";
$mail->Password = "gmontero20";

//indicar desde donde enviamos
$mail->SetFrom('gaizkamontero20@gmail.com', 'MobileBlog App');
//indicar remitente
$mail->AddReplyTo("gaizkamontero20@gmail.com","MobileBlog App");
//Asunto
$mail->Subject = "Ongi Etorri a MobileBlog";
//Cuerpo del mensaje
//$mail->MsgHTML("Hola que tal, esto es el cuerpo del mensaje!");
$mail->MsgHTML(file_get_contents('../plantillas/nuevo-usuario.html'));
//indico destinatario
$address = "gaizkamontero20@gmail.com";
$mail->AddAddress($address, "Nombre del registrado");
if(!$mail->Send()) {
	echo "Error al enviar: " . $mail->ErrorInfo;
} else {
	echo "Mensaje enviado!";
}