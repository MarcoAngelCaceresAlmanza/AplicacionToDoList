<?php
	require_once 'conexion.php';
	if(ISSET($_POST['add'])){
		if($_POST['tareas'] != ""){
			$tareas = $_POST['tareas'];
			
			$conexion->query("INSERT INTO `tareas` VALUES('', '$tareas', '')");
			header('location:principal.php');
		}
	}
?>