<?php

require 'config.php';

//invalidar session del usuario

	if(!isset($_SESSION)){
		session_start();
	}	
	//anular el perfil
	$_SESSION["perfil"]=null;
	
	//destruir session
	session_destroy();
	
//redirigir al login

	header( 'Location: '.WEBROOT_HTML.'login.php?msg=Session cerrada');
	exit;
