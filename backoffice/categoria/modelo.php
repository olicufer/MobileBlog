<?php

     error_reporting(E_ALL ^ E_DEPRECATED);

	//detalle:    SELECT id,fecha, titulo FROM articulo where id=1
	//eliminar:   DELETE FROM `articulo` WHERE `id`=1
	//insertar:   INSERT INTO `articulo`( `titulo`) VALUES ("SSSSSSSS")
	//modificar:  UPDATE `articulo` SET `titulo`=["el que quiera"] WHERE id=1

	function insertarCategoria($categoria){
		$cn = mysql_connect('localhost', 'root', 'root');
		mysql_select_db('tienda', $cn);
		
		$sql = 'INSERT INTO `categorias`( `titulo`) VALUES ("'.$categoria.'")';
		//echo ("sql " . $sql);
		if ( !mysql_query( $sql, $cn) )
		{
			echo ("fallo insert " . $sql);
		}
		
		mysql_close();
	}

	/**
	 * Eliminar un articulo por su identificador
	 * @param $id identifacor del articulo
	 * @return boolean si elimina true, en caso contrario false
	 */
	function eliminarCategoria( $id ){
		$resul = false;
		
		$cn = mysql_connect('localhost', 'root', 'root');
		mysql_select_db('tienda', $cn);
		
		$resul = mysql_query('DELETE FROM categorias WHERE id='.$id , $cn);
		
		mysql_close();
		
		return $resul;		
	}


	/**
	 * Obtiene el detalle de un articulo por su identificador
	 * @param $id identificador del articulo
	 * @return articulo si existe, en caso contraio null
	 */
	function detalleCategoria( $id )
	{
		$cn = mysql_connect('localhost', 'root', 'root');
		mysql_select_db('tienda', $cn);
	
		$resultado = mysql_query('SELECT id , titulo FROM categorias where id='.$id , $cn);
		
		$articulos = array();
	
		while($articulo = mysql_fetch_assoc($resultado))
		{
			$articulos[] = $articulo;
		}
	
		mysql_close();
	
		//comrpobar longitud antes de retornar
		if ( sizeof($articulos) > 0 ){
			return $articulos[0];
		}else {
			return null;	
		}	
	}
	
	function getCategorias()
	{
		$cn = mysql_connect('localhost', 'root', 'root');
		mysql_select_db('tienda', $cn);
	
		$resultado = mysql_query('SELECT id,nombre FROM categorias', $cn);
		$articulos = array();
		 
		while($articulo = mysql_fetch_assoc($resultado))
		{
			$articulos[] = $articulo;
		}
		 
		mysql_close();
	
		return $articulos;
	}

	
	
	function modificarCategoria( $id, $nom )
	{
		$cn = mysql_connect('localhost', 'root', 'root');
		mysql_select_db('tienda', $cn);
		
		       
		$sql = 'UPDATE `categorias` SET `titulo`="'.$nom.'" WHERE `id`='.$id;
		
		if ( !mysql_query( $sql, $cn) )
		{
			echo ("fallo update " . $sql);
		}
		
		mysql_close();
		
	}

?>