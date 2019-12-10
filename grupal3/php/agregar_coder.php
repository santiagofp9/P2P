<?php 
	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$dni = $_POST['dni'];
	$fecha = $_POST["anyo"]."-".$_POST["mes"]."-".$_POST["dia"];				
	$nacio = $_POST['nac'];
	$promoc = $_POST['promo'];		

	$con_agregar="INSERT INTO coder(nombre,apellido,dni_nie,fecha_nac,fk_nacionalidad,fk_promocion,estado) 
				  					VALUES('$nom','$ape','$dni','$fecha','$nacio','$promoc','1')";
	include 'conexion.php';
	mysqli_query($link,$con_agregar);	
	header('location:coders.php');	
?>

