<?php
/**
 * Vamos a crear una Clase con utilidades para poder reutilizar en todos los proyectos,
 * esta clase contendrá funciones estaticas y publicas para poder usarlas en cualquier momento
 * */


class Utilidades{
	
	/**
	 * Comprueba que exista en session un perfil de usuario
	 * si no existe, es que no esta logeado y le rediriguimos a login
	 */
	public static function checkSession(){		
	
		//Si no existe session la crea
		if(!isset($_SESSION)){
			session_start();		
		}
		
		//preguntar si existe el perfil del usuario en session
		if ( !$_SESSION["perfil"] ){
			header( 'Location: '.WEBROOT_HTML.'login.php?msg=Permiso denegado');
			exit;
		}	
	}
	
	/**
	 * pinta un html para un elemento Select- options
	 * @param string $name Nombre para el etributo 'name' del select
	 * @param array $arrayValoresNombres array con los valores y nombres para los OPTIONS; 'key' valores y 'value' los nombres
	 *        <br>ejemplo:   array( "0"=>"adminstrador", "1"=>"usuario")<br>
	 *         
	 * @param string $selected valor para selecionar el option 'selected'	  
	 * 
	 */
	public static function pintarSelectOptions( $name, $arrayValoresNombres , $selected ){
		
		$html = '<select name="'.$name.'">';
		
		foreach ( $arrayValoresNombres as $key => $value ) {
			
			if ( $key == $selected ) 
			{ 			
				$html .='<option selected value="'.$key.'">'; //seleccionado
			}
			else
			{
				$html .='<option value="'.$key.'">';
			}
				
			$html .= $value;
			$html .='</option>';
		}
		$html .='</select>';
		echo $html;
			
	}
	
	
	
	
	
}