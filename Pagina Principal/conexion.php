<?php
	$conexion = new mysqli("localhost", "root", "", "aplicaciontodolist");
	
	if(!$conexion){
		die("Error: No se puede conectar a la base de datos");
	}
?>