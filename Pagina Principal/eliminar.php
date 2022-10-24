<?php
	require_once 'conexion.php';
	
	if($_GET['id']){
		$id = $_GET['id'];
		
		$conexion->query("DELETE FROM `tareas` WHERE `id` = $id") or die(mysqli_errno());
		header("location: principal.php");
	}	
?>