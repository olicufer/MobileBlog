<?php

		
	
    // error_reporting(E_ALL ^ E_DEPRECATED);
    
	function insertarUsuario($email, $pass, $nombre, $rol=1 ){
		
		$db = new Database();
		$db->connect();
		
		if ( $db->insert('usuario', array(
								'email'=>$email,
								'password'=>$pass,
								'nombre'=>$nombre,								
								'rol'=>$rol				
					))) 
		{
			
		}
		else
		{
			echo ( 'ERRORS:' );
			var_dump( $db->getResult() );	
			echo ( '<br> SQL:'. $db->getSql().' <br>' );
		}		
		$db->disconnect();
		
	}

	/**
	 * Eliminar un articulo por su identificador
	 * @param $id identifacor del articulo
	 * @return boolean si elimina true, en caso contrario false
	 */
	function eliminarUsuario( $id ){
		$db = new Database();
		$db->connect();
		$db->delete('usuario', 'id='.$id );
		$db->disconnect();
	}


	/**
	 * Obtiene el detalle de un articulo por su identificador
	 * @param $id identificador del articulo
	 * @return articulo si existe, en caso contraio null
	 */
	function detalleUsuario( $id )
	{
		$db = new Database();
		$db->connect();
		$db->select( 'usuario','*','', 'id='.$id);
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
	 * Comprueba si existe el usuario en la bbdd por su nombre y email
	 * @param $email
	 * @param $pass
	 * @return usuario y si no existe null
	 */
	function checkUsuario( $email, $pass )
	{
		$resul = null;
		$db = new Database();
		$db->connect();
		
		//escapaar cadenas que puedan tener simbolo especiales
		$email = $db->escapeString($email);
		
		//si retorna true encuentra usuario
		if ( $db->select( 'usuario','*','', 'email="'.$email.'" and password='.$pass ))
		{			
			$resul = $db->getResult()[0];//retorna primer resultado del array
		}		
		$db->disconnect();
		return $resul;
	}
	
	/**
	 * Comprueba si existe el usuario en la bbdd por su nombre y email
	 * @param $email
	 * @param $pass
	 * @return usuario y si no existe null
	 */
	function checkUsuarioNuevo( $email, $nombre )
	{
		$resul = null;
		$db = new Database();
		$db->connect();
	
		//escapaar cadenas que puedan tener simbolo especiales
		$email = $db->escapeString($email);
	
		//si retorna true encuentra usuario
		if ( $db->select( 'usuario','*','', "email='".$email."' or nombre='".$nombre."'" ))
		{
			$resul = $db->getResult()[0];//retorna primer resultado del array
		}else{
			throw new Exception('Fallo SQL: checkUsuarioNuevo');
		}
		$db->disconnect();
		return $resul;
	}
	
	function checkUsuarioNombre( $nombre )
	{
		$resul = null;
		$db = new Database();
		$db->connect();
	
		//si retorna true encuentra usuario
		if ( $db->select( 'usuario','*','', "nombre='".$nombre."'" ))
		{
			if (isset($db->getResult()[0])){
				$resul = true;
			}			
		}else{
			throw new Exception('Fallo SQL: checkUsuarioNuevo');
		}
		$db->disconnect();
		return $resul;
	}
	
	function checkUsuarioEmail( $email )
	{
		$resul = null;
		$db = new Database();
		$db->connect();
	
		//si retorna true encuentra usuario
		if ( $db->select( 'usuario','*','', "email='".$email."'" ))
		{
			if (isset($db->getResult()[0])){
				$resul = true;
			}
		}else{
			throw new Exception('Fallo SQL: checkUsuarioNuevo');
		}
		$db->disconnect();
		return $resul;
	}
	
	/**
	 * Comprueba si existe el usuario en la bbdd y esta sin validar
	 * @param $email
	 * @param $pass
	 * @return usuario y si no existe null
	 */
	function checkUsuarioNoValidado( $nombre )
	{
		$resul = null;
		$db = new Database();
		$db->connect();
	
		//si retorna true encuentra usuario
		if ( $db->select( 'usuario','*','', "nombre='".$nombre."' and validar=0" ))
		{
			$resul = $db->getResult()[0];//retorna primer resultado del array
		}else{
			throw new Exception('Fallo SQL: checkUsuarioNuevo');
		}
		$db->disconnect();
		return $resul;
	}
	
	function getUsuarios()
	{

		
		$db = new Database();
		$db->connect();
		$db->select( 'usuario');
		$res = $db->getResult();
		$db->disconnect();
		return $res;
		
		
	}

		
	function modificarUsuario( $id, $email, $pass, $nombre, $rol)
	{
		$db = new Database();
		$db->connect();
		$db->update('usuario', 
					array(
						'email'=>$email,
						'password'=>$pass,
						'nombre'=>$nombre,
						'rol'=>$rol
					),		 
					'id='.$id);		
		$db->disconnect();		
		
	}
	
	/**
	 * Activamos el usuario al recibir la confirmacion desde el mail del usuario.
	 * @param $nombre
	 * @param $validar
	 */
	function activarUsuario($nombre, $validar=1)
	{
		$db = new Database();
		$db->connect();
		$db->update('usuario',
				array(
						'validar'=>$validar		
				),
				"nombre='".$nombre."'");
		$db->disconnect();
	
	}

?>