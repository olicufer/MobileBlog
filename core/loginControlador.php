<?php 

require 'config.php';
require_once 'DataBase.php';
require '../backoffice/usuario/modelo.php';



$usuario =  checkUsuario($_POST['email'], $_POST['password']);

if ( $usuario ){
	
	
	//guardar perfil del usuaario en session
	session_start();
	$_SESSION["perfil"]=$usuario;
	
	header( 'Location: '.CONTROLLER_ARTICULO );
	exit;
	
	
}else{
	
		$msg = 'email o password incorrectos';	
		header( 'Location: '.WEBROOT."html/login.php?msg=".$msg );
		exit;
	
	
}



?>