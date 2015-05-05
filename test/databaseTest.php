<?php

// Create connection

require '../core/Database.php';
$db = new Database();
$db->connect();




$resul = $db->getResult();

if ( null != $resul ){
	echo 'FAllo conexion';
	var_dump($resul);
}else{
	echo 'conexion establecida';
}

var_dump($db);


$db->disconnect();
?>