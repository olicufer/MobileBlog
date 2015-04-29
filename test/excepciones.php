<?php


/**
 * Clase de Test para probar el funcionamineto de las Excepciones en PHP
 */

echo('ejecucion linea1 <br>');

//Ocurre uan excepcion al dividir por cero
try{
	$plantilla = file_get_contents('fichero_que_no_existe.html');
	
	$result = 7/0;
	
}catch (Excepcion $e){
	
}




echo('ejecucion linea2 <br>');
echo('ejecucion linea3 <br>');