<?php

/* Definicion Variables Globales */

define ('APP_NAME', 'MobileBlog');

define('WEBROOT', 'http://'. $_SERVER['HTTP_HOST'].'/'.APP_NAME.'/' );

define('WEBROOT_BACK', WEBROOT.'backoffice/' );

define('UPLOAD_DIRECTORIO', $_SERVER['DOCUMENT_ROOT'].'/'. APP_NAME.'/uploads/' );

define('PLANTILLAS_DIRECTORIO', $_SERVER['DOCUMENT_ROOT'].'/'. APP_NAME.'/plantillas/' );

define('PLANTILLA_USER', $_SERVER['DOCUMENT_ROOT'].'/'. APP_NAME.'/plantillas/nuevo-usuario.php' );

define('PLANTILLA_ARTICULO', $_SERVER['DOCUMENT_ROOT'].'/'. APP_NAME.'/plantillas/nuevo-articulo.php' );

define('CORREO_ELECTRONICO', $_SERVER['DOCUMENT_ROOT'].'/'. APP_NAME.'/core/CorreoElectronico.php' );

define('CORREO_ELECTRONICO_LIBRERIA', $_SERVER['DOCUMENT_ROOT'].'/'. APP_NAME.'/librerias/PHPMailer/PHPMailerAutoload.php' );

define('MODELO_USER', $_SERVER['DOCUMENT_ROOT'].'/'. APP_NAME.'/backoffice/usuario/modelo.php' );
		
define('IMAGES', WEBROOT.'uploads/' );

define('WEBROOT_CORE', WEBROOT.'core/' );

define('WEBROOT_HTML', WEBROOT.'html/' );

define('WEBROOT_HTML_BACK', WEBROOT_HTML.'backoffice/' );

define('CONTROLLER_LOGIN', WEBROOT_CORE.'loginControlador.php' );

define('CONTROLLER_REGISTRO', WEBROOT_CORE.'registroControlador.php' );

define('CONTROLLER_LOGOUT', WEBROOT_CORE.'logoutControlador.php' );

define('CONTROLLER_ARTICULO', WEBROOT_BACK.'articulo/controlador.php' );

define('CONTROLLER_CATEGORIA', WEBROOT_BACK.'categoria/controlador.php' );

define('CONTROLLER_USER', WEBROOT_BACK.'usuario/controlador.php' );

define('CONTROLLER_PERFIL', WEBROOT_HTML_BACK.'userprofile.php' );

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
