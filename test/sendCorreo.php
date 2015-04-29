<?php

//incluir la clase CorreoElectronico
require_once ('../core/CorreoElectronico.php');

//crear variable Correo habilitando la depuracion
$correo = new CorreoElectronico(true);

//setear persona destino, cuerpo y asunto
$client = 'IvaN';
$correo->setAsunto('Bienvenido a MobileBlog '.$client.'. Gracias por registrarte');

$cuerpo = file_get_contents('../plantillas/email-nuevo-user.html');
$cuerpo = str_replace('usuario', $client , $cuerpo );

$correo->setCuerpo($cuerpo);
$correo->setDestinatario('alfonso.aparicio.ivan@gmail.com');

//enviar email
$correo->enviar();