<?php 
	$nom = $_POST['nombre'];
	$ape = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];				
	$tipo = $_POST['tipo'];
	$promou = $_POST['promocion'];
    $nacionalidad = $_POST['nacionalidad'];	
    $promou2 = $_POST['promocion2'];
    $promou3 = $_POST['promocion3'];	

	$con_agregar="INSERT INTO login(nombre,apellido,usuario,password,tipo,fk_promocion,fk_nacionalidad,fk_promocion2,fk_promocion3) 
    VALUES('$nom','$ape','$usuario','$password','$tipo','$promou','$nacionalidad','$promou2','$promou3')";
	include 'conexion.php';
	mysqli_query($link,$con_agregar);	
	header('location:index.php');	





function resgistrarUsu($link){
    $consulta = " select * from login where usuario ='$_POST[usuario]'";
    
    $r = mysqli_query($link,$consulta);
    $num = mysqli_num_rows($r);
    if($num == 0){
        $hash=password_hash($_POST['password'], PASSWORD_DEFAULT);
        $insert = "insert into login (nombre, usuario, password, tipo) values('$_POST[nombre]','$_POST[usuario]','$hash','$_POST[tipo]')";
        mysqli_query($link,$insert);
        echo mysqli_error($link);
    }
    else{
        echo "ya esta registrado";
    }
}


function login($link){
    /* consultar o validar que los datos esten en la base de datos, si estan guardados guardamos en variables de session, y mostrar la pagina(menu) dependiendo del usuario que entro en el login */
    $sql = "select * from login where email = '$_POST[email]'";
    $r = mysqli_query($link,$sql);
    $numero = mysqli_num_rows($r);
    if($numero == 1){
        $arr = mysqli_fetch_array($r);
        if(password_verify($_POST['password'],$arr['password'])){ //verifica se la cadena de caracteres es igual.
            $_SESSION['tipo'] = $arr['tipo']; //se puede poner la posicion de la tabla en este caso seria $arr[3] 
            $_SESSION['nomb'] = $arr['nombre'];
            $_SESSION['id'] = $arr[4];
            header("location:index.php");
        } else{
            echo "MAL! TRY AGAIN BITCH";
        }
        
        
        
    }else{
        echo "Tu email no ta'";
    }
}
/*
$consulta = " select * from login where usuario ='$_POST[usuario]'";
    $r = mysqli_query($link,$consulta);
    $num = mysqli_num_rows($r);
    if($num == 0){
        
    $nom = $_POST['nombre'];
    $ape = $_POST['apellido'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];				
	$tipo = $_POST['tipo'];
	$promou = $_POST['promocion'];
    $nacionalidad = $_POST['nacionalidad'];	
    $hash=password_hash($_POST['password'], PASSWORD_DEFAULT);
	$con_agregar="INSERT INTO login(nombre,apellido,usuario,password,tipo,fk_promocion,fk_nacionalidad) 
    VALUES('$nom','$ape','$usuario','$hash','$tipo','$promou','$nacionalidad')";
	include 'conexion.php';
	mysqli_query($link,$con_agregar);*/
?>


