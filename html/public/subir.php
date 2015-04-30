<?php 

require_once '../../core/config.php';

/*if (isset($_POST['foto'])){
	insertarFoto($art['id']);
}*/

//comprobamos si ha ocurrido un error.
if ($_FILES["foto"]["error"] > 0){
	echo "ha ocurrido un error";
} else {
	//ahora vamos a verificar si el tipo de archivo es un tipo de foto permitido.
	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	//Tamano del archivo no exceda los 10 MB
	$limite_kb = 10 * 1024 * 1024;	
	$id = $_POST['id'];

	if (in_array($_FILES['foto']['type'], $permitidos) && $_FILES['foto']['size'] <= $limite_kb){
		//esta es la ruta donde copiaremos la foto
		//recuerden que deben crear un directorio con este mismo nombre
		//en el mismo lugar donde se encuentra el archivo subir.php
		$ruta = UPLOAD_DIRECTORIO . $_FILES['foto']['name'];
		//comprovamos si este archivo existe para no volverlo a copiar.
		//pero si quieren pueden obviar esto si no es necesario.
		//o pueden darle otro nombre para que no sobreescriba el actual.
		if (!file_exists($ruta)){
			//aqui movemos el archivo desde la ruta temporal a nuestra ruta
			//usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
			//almacenara true o false
			$resultado = move_uploaded_file($_FILES['foto']['tmp_name'], $ruta);
			var_dump($_FILES['foto']['tmp_name']);
			var_dump($ruta);
			if ($resultado){
				echo "el archivo ha sido movido exitosamente";

				//conexion a la base de datos
				mysql_connect("localhost", "root", "root") or die(mysql_error()) ;
				mysql_select_db("tienda") or die(mysql_error()) ;

				//insertar en bbdd
				$nombre = PUBLIC_IMG . $_FILES['foto']['name'];
				@mysql_query("UPDATE articulo SET foto='$nombre' WHERE id='$id.'");

				echo "inserccion con exito de la foto";

			} else {
				echo "ocurrio un error al mover el archivo.";
			}
		} else {
			echo $_FILES['foto']['name'] . ", este archivo existe";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
}

header( 'Location: '.WEBROOT );

?>