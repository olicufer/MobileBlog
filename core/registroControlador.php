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
	$nombre = strtoupper($_POST['usuario']);
	$mail = strtolower($_POST['email']);
	$password = $_POST['password'];
	$repPassword = $_POST['repitpassword'];
	
	$usuario =  checkUsuarioNuevo($mail, $nombre); //Para comprobar si ya existe el usuario o el mail
	
	//Validar datos:
		//1. Pass y repass sean iguales
		if ($password!=$repPassword){
			$msg="No has insertado las mismas contrase�as";
			header( 'Location: '.WEBROOT."html/registro.php?msg=".$msg );
			exit;
		}
		//2. Comprobar que no exista nombre o email en la bbdd
		else if ($usuario==true){
			$msg="El nombre o mail insertado ya existe";
			header( 'Location: '.WEBROOT."html/registro.php?msg=".$msg );
			exit;
		}
		//Si validacion OK => Insertar usuario y mandar a login
		else{
			try {
				insertarUsuario($mail, $password, $nombre);
				$email=new CorreoElectronico();
				$email->mandarMail($mail, $nombre);
			} catch (Exception $e) {
				var_dump($e);	
			}
			
			$msg="El registro se ha completado correctamente.";
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