<?php 
	$cod=$_GET['eli'];

	include 'conexion.php';	

	$slq_elimPro="UPDATE promocion SET estado='0' WHERE promocion.id_promocion='$cod'";
	mysqli_query($link,$slq_elimPro);

	header('location:promociones.php');
?>