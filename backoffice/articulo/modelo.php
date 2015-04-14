<?php

	//require_once '../../core/DataBase.php';
	
	
    // error_reporting(E_ALL ^ E_DEPRECATED);
    
	//detalle:    SELECT id,fecha, titulo FROM articulo where id=1
	//eliminar:   DELETE FROM `articulo` WHERE `id`=1
	//insertar:   INSERT INTO `articulo`( `titulo`) VALUES ("SSSSSSSS")
	//modificar:  UPDATE `articulo` SET `titulo`=["el que quiera"] WHERE id=1

	function insertarArticulo($titulo, $id_usuario=1, $contenido="", $url_foto){
		
		$db = new Database();
		$db->connect();
		$db->insert('articulo', array('titulo'=>$titulo , 'id_usuario'=>$id_usuario, 'contenido'=>$contenido,'url_foto'=>$url_foto));		
		$db->disconnect();
		
	}

	/**
	 * Eliminar un articulo por su identificador
	 * @param $id identifacor del articulo
	 * @return boolean si elimina true, en caso contrario false
	 */
	function eliminarArticulo( $id ){
		$db = new Database();
		$db->connect();
		$db->delete('articulo', 'id='.$id );
		$db->disconnect();
	}


	/**
	 * Obtiene el detalle de un articulo por su identificador
	 * @param $id identificador del articulo
	 * @return articulo si existe, en caso contraio null
	 */
	function detalleArticulo( $id )
	{
		$db = new Database();
		$db->connect();
		$db->select( 'articulo','*','', 'id='.$id);
		$res = $db->getResult();
		$db->disconnect();		
	
		//comrpobar longitud antes de retornar
		if ( sizeof($res) > 0 ){
			return $res[0];
		}else {
			return null;	
		}	
	}
	
	function getArticulos( $limit=10 , $id_usuario=null)
	{

		
		
		$sql = "SELECT a.id , titulo, id_usuario, nombre , fecha, nombre, contenido, url_foto FROM `articulo` as a , `usuario` as u WHERE a.id_usuario = u.id";
		
		$db = new Database();
		$db->connect();
		
		$where = '';
		if ( isset($id_usuario) ){
			$where =' and id_usuario='.$id_usuario;
		}
		
		$order = ' order by fecha';
		
		//$db->select( 'articulo','*','', $where ,'', '');
		$db->sql( $sql.$where.$order );
		
		
		$res = $db->getResult();
		$db->disconnect();
		return $res;
		
		
	}

	
	
	function modificarArticulo( $id, $tit , $id_usuario=1, $contenido="", $url_foto)
	{
		$db = new Database();
		$db->connect();
		$db->update('articulo', array('titulo'=>$tit, 'id_usuario'=>$id_usuario, 'contenido'=>$contenido, 'url_foto'=>$url_foto), 'id='.$id);		
		$db->disconnect();		
		
	}

?>