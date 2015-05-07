<?php
	
	//require_once '../../core/Database.php';

    //error_reporting(E_ALL ^ E_DEPRECATED);

	//detalle:    SELECT id, fecha, titulo FROM articulo where id=1
	//eliminar:   DELETE FROM `articulo` WHERE `id`=1
	//insertar:   INSERT INTO `articulo`( `titulo`) VALUES ("SSSSSSSS")
	//modificar:  UPDATE `articulo` SET `titulo`=["el que quiera"] WHERE id=1

	function insertarCategoria($titulo){
		$db = new Database();
		$db->connect();
		$db->insert(
				'categoria', 
				array(
						'titulo'=>$titulo 
					)
				);
		$db->disconnect();
	}

	
	/**
	 * Eliminar un categoria por su identificador
	 * @param $id identifacor del categoria
	 * @return boolean si elimina true, en caso contrario false
	 */
	function eliminarCategoria( $id ){
		$db = new Database();
		$db->connect();
		$db->delete('categoria', 'id='.$id );
		$db->disconnect();	
	}


	/**
	 * Obtiene el detalle de un categoria por su identificador
	 * @param $id identificador del categoria
	 * @return categoria si existe, en caso contraio null
	 */
	function detalleCategoria( $id ){
		$db = new Database();
		$db->connect();
		$db->select( 'categoria','*','', 'id='.$id);
		$res = $db->getResult();
		$db->disconnect();		
	
		//comrpobar longitud antes de retornar
		if ( sizeof($res) > 0 ){
			return $res[0];
		}else {
			return null;	
		}	
	}
	
	
	function getCategorias( $limit=10, $id_usuario=null ){
		//SELECT especial que contabiliza el nº de articulos de la categoria

		$sql = "SELECT c.id, c.fecha, c.titulo, count(a.id_categoria) as articulos FROM `categoria` as c LEFT JOIN `articulo` as a ON id_categoria = c.id group by a.id_categoria";
		//Left join para mostrar registros de la tabla de la izquierda si no hay coincidencias
		$sql = "SELECT c.id, c.fecha, c.titulo, count(a.id_categoria) as articulos FROM `categoria` as c LEFT JOIN  `articulo` as a ON id_categoria = c.id group by a.id_categoria";
		
		$db = new Database();
		$db->connect();
		
		$where = '';
		if( isset($id_usuario)){
			$where = ' and id_usuario='.$id_usuario;
		}
		
		$db->sql( $sql.$where );
		
		$res = $db->getResult();
		$db->disconnect();
		return $res;
	}

	
	function modificarCategoria( $id, $tit ){
		$db = new Database();
		$db->connect();
		$db->update('categoria', array('titulo'=>$tit), 'id='.$id);		
		$db->disconnect();
	}

	
?>
