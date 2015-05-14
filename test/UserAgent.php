<?php

//@see: http://php.net/manual/en/function.getallheaders.php
// Obtiene todas los atributos de la cabecera de la peticion REQUEST


foreach (getallheaders() as $name => $value) {
	echo "<b>$name:</b> $value <br>";
}


//saber el user agent

echo "Tu navegador es: ".$_SERVER['HTTP_USER_AGENT'];

echo "<hr><br>";

require_once '../librerias/Mobile-Detect/Mobile_Detect.php';
$detect = new Mobile_Detect;

// Any mobile device (phones or tablets).
if ( $detect->isMobile()  ) {
	echo "ERES UN MOVIL";
}

if( $detect->isTablet() ){
	echo "ERES UNA TABLET";
}

if( !$detect->isTablet() && !$detect->isMobile() ){
	echo "NO ERES MOVIL NI TABLET";
}
