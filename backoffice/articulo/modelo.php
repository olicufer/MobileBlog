<?php

	//require_once '../../core/DataBase.php';
	
	
    // error_reporting(E_ALL ^ E_DEPRECATED);
    
	//detalle:    SELECT id,fecha, titulo FROM articulo where id=1
	//eliminar:   DELETE FROM `articulo` WHERE `id`=1
	//insertar:   INSERT INTO `articulo`( `titulo`) VALUES ("SSSSSSSS")
	//modificar:  UPDATE `articulo` SET `titulo`=["el que quiera"] WHERE id=1

	function insertarArticulo($titulo, $id_usuario=1, $id_categoria=1, $contenido="", $path){
		
		$db = new Database();
		$db->connect();
		$db->insert(
				'articulo', 
				array(
					'titulo'=>$titulo , 
					'id_usuario'=>$id_usuario,
					'id_categoria'=>$id_categoria,
					'contenido'=>$contenido,
					'foto' => $path							
				)
			);		
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
	function detalleArticulo( $id ){
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
	
	
	/**
	 * Obtiene todos los artículos de un usuario, si es admin el de todos los users
	 * @param number $limit Limite para el resultSet
	 * @param string $id_usuario
	 * @return Ambigous <multitype:, NULL>
	 */
	function getArticulos( $limit=10 , $id_usuario=null, $id_categoria=null){

		$sql = "SELECT a.id , a.titulo, id_usuario, c.titulo as categoria, u.nombre , a.fecha, a.contenido,  foto FROM `articulo` as a , `usuario` as u, `categoria` as c   ";
		$where = ' WHERE a.id_usuario = u.id and a.id_categoria = c.id ';
		$order_by = " ORDER BY fecha DESC ";
		
		$db = new Database();
		$db->connect();
		
		
		
		if ( isset($id_usuario) ){
			$where .=' and id_usuario='.$id_usuario;
		}
		
		//$where = '';
		if ( isset($id_categoria) ){
			$where .=' and id_categoria='.$id_categoria;
		}
		
		//$db->select( 'articulo','*','', $where ,'', '');
		$db->sql( $sql.$where.$order_by );
		
		
		$res = $db->getResult();
		$db->disconnect();
		return $res;
		
		
	}

	
	
	function modificarArticulo( $id, $tit , $id_usuario=1, $id_categoria=1, $contenido="", $path=""){
		
		$camposUpdate= array('titulo'=>$tit, 'id_usuario'=>$id_usuario, 'id_categoria'=>$id_categoria, 'contenido'=>$contenido);
		if ( $path!=""){
			$camposUpdate['foto'] = $path;
		} 
		
		$db = new Database();
		$db->connect();
		$db->update(
					'articulo', 
					$camposUpdate, 
					'id='.$id
			);		
		$db->disconnect();		
		
	}
	
	
	

?>