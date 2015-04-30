<?php

require '../core/config.php';
require_once '../core/Database.php';
require '../backoffice/usuario/modelo.php';


$array = array ('result'=>'error', 'msg'=>'');

if(isset($_GET['usuario'])){
	
	$usuarionom =  checkUsuarioNombre(strtoupper($_GET['usuario']));
	
	if($usuarionom==true){
		//echo ($_GET['usuario'] . ' no es un usuario valido');
		$array = array('result'=>'error', 'msg'=>$_GET['usuario'] . ' NO es un usuario valido');
	}else{
		//echo ($_GET['usuario'] . ' es un usuario valido');
		$array = array('result'=>'ok', 'msg'=>$_GET['usuario'] .' SI es un usuario valido');
	}
	
}

if(isset($_GET['email'])){
	
	if (!filter_var($_GET['email'], FILTER_VALIDATE_EMAIL)) {
		$array = array('result'=>'error', 'msg'=>$_GET['email'] . ' NO es un formato de email valido');
		//echo ($_GET['email'] . ' no es un formato de email valido');
			
	}else{
		
		$usuarioemail = checkUsuarioEmail(strtolower($_GET['email']));
		
		if($usuarioemail==true){
			//echo ($_GET['email'] . ' no es un email valido');
			$array = array('result'=>'error', 'msg'=>$_GET['email'] . ' NO es un email valido');
		}else{
			//echo ($_GET['email'] . ' es un email valido');
			$array = array('result'=>'ok', 'msg'=>$_GET['email'] . ' SI es un email valido');
		}
	}	
		
}

header('Content-Type: application/json');
echo (json_encode($array));