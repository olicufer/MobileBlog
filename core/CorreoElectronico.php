<?php
//incluimos la librería
require_once ('../librerias/PHPMailer/PHPMailerAutoload.php');

class CorreoElectronico {
	
	//Atributos privados
	private $phpMailer = null;
	private $port = 465;
	private $host = "smtp.gmail.com";
	private $mail_user = 'mobileblog2015@gmail.com';
	private $mail_pass = '2015mb15';
	private $appName = 'MobileBlog App';
	private $type_smtp = 'ssl';
	
	//Constructor
	function CorreoElectronico($debug=false){
		// crear un objeto de la libreria PHPMailer
		$this->phpMailer = new PHPMailer ();
		// indico a la clase que use SMTP
		$this->phpMailer->IsSMTP ();
		// permite modo debug para ver mensajes de las cosas que van ocurriendo
		if($debug){
			$this->phpMailer->SMTPDebug = 2;
		}
		// Debo de hacer autenticación SMTP
		$this->phpMailer->SMTPAuth = true;
		$this->phpMailer->SMTPSecure = $this->type_smtp;
		
		// indico el servidor de Gmail para SMTP
		$this->phpMailer->Host = $this->host;
		// indico el puerto que usa Gmail
		$this->phpMailer->Port = $this->port;
		
		// indico un usuario / clave de un usuario de gmail
		$this->phpMailer->Username = $this->mail_user;
		$this->phpMailer->Password = $this->mail_pass;
		
		// indicar desde donde enviamos
		$this->phpMailer->SetFrom ( $this->mail_user, $this->appName );
		// indicar remitente
		$this->phpMailer->AddReplyTo ( $this->mail_user, $this->appName );
	}
		
	//Metodos
	function mandarMail($address, $nombre, $subject="MobileBlog") {
		// Asunto
		$this->phpMailer->Subject = $subject;
		// Cuerpo del mensaje
		// $this->phpMailer->MsgHTML("Hola que tal, esto es el cuerpo del mensaje!");
		$plantilla = file_get_contents ( "../plantillas/nuevo-usuario.php" );
		$contenido = str_replace ( "{usuario}", $nombre, $plantilla );
		$url = "localhost/MobileBlog/core/validarControlador.php?usr=".$nombre;
		$contenido = str_replace ( "{url}", $url, $contenido );
		$this->phpMailer->MsgHTML ( $contenido );
		// $this->phpMailer->MsgHTML(file_get_contents('../plantillas/nuevo-usuario.html'));
		// indico destinatario
		// $address = "gaizkamontero20@gmail.com";
		$this->phpMailer->AddAddress ( $address, $nombre );
		if (! $this->phpMailer->Send ()) {
			echo "Error al enviar: " . $mail->ErrorInfo;
		} else {
			echo "Mensaje enviado!";
		}
	}
	
	function enviar(){
		return $this->phpMailer->send();
	}
	
	//Getters y setters
	function setAsunto($asunto){
		$this->phpMailer->Subject=$asunto;
	}
	
	function setDestinatario($destinatario){
		$this->phpMailer->addAddress($destinatario);
	}
	
	function setCuerpo($cuerpo){
		$this->phpMailer->msgHTML($cuerpo);
	}
	
}