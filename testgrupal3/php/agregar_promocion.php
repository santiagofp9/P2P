<?php 
	$nom = $_POST['nombre'];
	$an = $_POST['ano'];
	$fab = $_POST['fabrica'];
	
	
		

	$con_agregar="INSERT INTO promocion(nombre, ano, fk_fabrica,estado) VALUES('$nom','$an','$fab','1')";
	
	include 'conexion.php';
	mysqli_query($link,$con_agregar);	
	header('location:promociones.php');


?>
