<?php

require '../core/config.php';
require_once '../core/DataBase.php';
require '../backoffice/usuario/modelo.php';

if ( checkUsuarioNombre($_GET['usuario'])){
	echo ('usuario NO disponible');
}else{
	echo ('usuario disponible');
}

