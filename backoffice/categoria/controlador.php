<?php
require_once('../../core/config.php');
require_once('modelo.php');

//recoger operacion a realizar
$op = 1; 

if ( isset($_GET["op"]) )
{
	$op = $_GET["op"];
}
if ( isset($_POST["op"]) )
{
	$op = $_POST["op"];	
}
if ( $op == -1){
	echo("No se ha solicitado ningun operación");
}


//Realizar operacion en funcion de la "op"
switch ($op) {
	case OP_INSERTAR:
		op_insert();
		break;
	case OP_LISTAR:		
		op_listar();
		break;
	case OP_DETALLE:
		op_detalle();
		break;
	case OP_ELIMINAR:
		op_eliminar();
		break;
	case OP_MODIFICAR:
		op_modificar();
		break;
}


function op_listar(){	
	//obtener todos los articulos
	$articulos = getCategorias();
	//llamar vista listado
	require('vista.php');
}

function op_insert(){
	//realizar inserccion
	if (isset($_POST["nombre"])) {
		insertarCategoria(  $_POST["nombre"] ); 
		//listar de nuevo todos
		op_listar();
	}else{
		echo("No se puede insertar sin titulo");
	}	
}

function op_eliminar(){
	
	eliminarCategoria( $_GET["id"] );
	op_listar();	
}

function op_detalle(){

	if (isset($_GET["id"])) {
		//obtener articulo del modelo
		$articulo = detalleCategoria( $_GET['id'] );		
	}else{
		//crear nuevo articulo
		$articulo = array( 
						"id" => -1,
						"nombre" => ""
		);
	}
	require('vista_detalle.php');
}

function op_modificar(){

	modificarCategoria( $_POST['id'], $_POST['titulo'] );
	op_listar();	
}
