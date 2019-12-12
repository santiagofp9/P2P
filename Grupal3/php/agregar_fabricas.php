<?php 
	$nom = $_POST['nombre'];
	$ciu = $_POST['ciudad'];
	
		

	$con_agregar="INSERT INTO fabrica(nombre,fk_ciudad,estado) VALUES('$nom','$ciu','1')";
	
	include 'conexion.php';
	mysqli_query($link,$con_agregar);	
	header('location:fabricas.php');


?>
