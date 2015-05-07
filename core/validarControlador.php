<?php

//incluir requires necesarios
require 'config.php';
require_once 'Database.php';
require '../backoffice/usuario/modelo.php';
require_once 'CorreoElectronico.php';

//Vamos a guardar en una cookie el valor del mail para que no lo pierda a pesar de que falten datos o algo parecido
/*$email=$_POST['email'];
setcookie('reg_nombre', $email, 1000*60*5); //el ultimo parametro es el tiempo que dura y son 5 min.*/

//recoger parametros del formulario ($_POST)
try {
	$nombre=$_GET["usr"];
	
	$usuario =  checkUsuarioNoValidado($nombre);
	
	//Validar datos:
		if ($usuario==true){
			try {
				activarUsuario($nombre);
				//CorreoElectronico::mandarMail($mail, $nombre);
			} catch (Exception $e) {
				var_dump($e);
			}
			$msg="El usuario ha sido activado";
			header( 'Location: '.WEBROOT."html/login.php?msg=".$msg );
			exit;
		}else{
			$msg="El usuario ya esta activado, introduce email y password, y disfruta de MobileBlog!";
			header( 'Location: '.WEBROOT."html/login.php?msg=".$msg );
			exit;
		}
		
		//validacion ERROR => mensaje y mandar registro de nuevo
} catch (Exception $e) {
	var_dump($e);
	$msg="Fallo SQL";
	header( 'Location: '.WEBROOT."html/registro.php?msg=".$msg );
	exit;
}	