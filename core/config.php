<?php

/* Definicion Variables Globales */

define ('APP_NAME', 'MobileBlogMio');

define('WEBROOT', 'http://'. $_SERVER['HTTP_HOST'].'/'.APP_NAME.'/' );

define('WEBROOT_BACK', WEBROOT.'backoffice/' );

//define('UPLOAD_DIRECTORIO', $_SERVER['DOCUMENT_ROOT']. APP_NAME.'/html/public/images/' );

define('UPLOAD_DIRECTORIO', APP_NAME.'/html/public/images/' );

define('PUBLIC_IMG','/' . APP_NAME.'/html/public/images/' );

define('WEBROOT_CORE', WEBROOT.'core/' );

define('WEBROOT_HTML', WEBROOT.'html/' );

define('WEBROOT_HTML_BACK', WEBROOT_HTML.'backoffice/' );

define('CONTROLLER_LOGIN', WEBROOT_CORE.'loginControlador.php' );

define('CONTROLLER_REGISTRO', WEBROOT_CORE.'registroControlador.php' );

define('CONTROLLER_LOGOUT', WEBROOT_CORE.'logoutControlador.php' );

define('CONTROLLER_ARTICULO', WEBROOT_BACK.'articulo/controlador.php' );

define('CONTROLLER_CATEGORIA', WEBROOT_BACK.'categoria/controlador.php' );

define('CONTROLLER_USER', WEBROOT_BACK.'usuario/controlador.php' );

/* Operaciones */

define ('OP_INSERTAR',   0 );
define ('OP_LISTAR',     1 );
define ('OP_DETALLE',    2 );
define ('OP_ELIMINAR',   3 );
define ('OP_MODIFICAR',  4 );



class Constantes {
	
	public static $ROL_ADMINISTRADOR = 0;

	//Roles de los usuarios
	public static $roles =
						array(
								"0" =>"Administrador",
								"1"=>"Usuario"
						);
}
