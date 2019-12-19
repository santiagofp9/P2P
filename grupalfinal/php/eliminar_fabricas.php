<?php 
	$cod=$_GET['eli'];

	include 'conexion.php';

	$slq_elimFab="UPDATE fabrica SET estado='0' WHERE fabrica.id_fabrica='$cod'";	
	mysqli_query($link,$slq_elimFab);

	header('location:fabricas.php');
?>