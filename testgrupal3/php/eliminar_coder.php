<?php 
	$cod=$_GET['eli'];

	$slq_eliminar="UPDATE coder SET estado='0' WHERE coder.id_coder='$cod'";

	include 'conexion.php';
	mysqli_query($link,$slq_eliminar);
	header('location:coders.php');
?>