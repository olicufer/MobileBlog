<?php
//conexión a la base de datos
mysql_connect("localhost", "root", "root") or die(mysql_error()) ;
mysql_select_db("subirimg") or die(mysql_error()) ;

//si la variable foto no ha sido definida nos dará un advertencia.
//$id = $_GET['foto'];

//vamos a crear nuestra consulta SQL
$sql = "SELECT foto FROM fotos";
//con mysql_query la ejecutamos en nuestra base de datos indicada anteriormente
//de lo contrario mostraremos el error que ocaciono la consulta y detendremos la ejecucion.
$resultSet= @mysql_query($sql) or die(mysql_error());


$num_rows = mysql_num_rows($resultSet);

$cont=1; 

$rutas=array();

while ($rows = mysql_fetch_array($resultSet)) {

	if ($cont <= $num_rows){
		echo $rows['foto'].'</br>';
		array_push($rutas, "uploads/" . $rows['foto']);
		$cont++;
	}

}

var_dump($rutas);

//saco el numero de elementos
$longitud = count($rutas);

//Recorro todos los elementos
for($i=0; $i<$longitud; $i++)
{
//saco el valor de cada elemento
	echo "<img src='$rutas[$i]' />";
	echo "<br>";
}


//si el resultado fue exitoso
//obtendremos el dato que ha devuelto la base de datos
//$datos = mysql_fetch_assoc($resultSet);
//var_dump($datos);
//ruta va a obtener un valor parecido a "uploads/nombre_foto.jpg" por ejemplo
//$ruta = "uploads/" . $datos['foto'];


/*while ($datos) {
	/*echo $fila["id_usuario"];
	echo $fila["nombre_completo"];
	echo $fila["estatus_usuario"];
	//var_dump($fila['foto']);
	array_push($rutas, "uploads/" . $datos['foto']);
}

while($rutas){
	//ahora solamente debemos mostrar la foto
	echo "<img src='$rutas' />";
}*/

?>