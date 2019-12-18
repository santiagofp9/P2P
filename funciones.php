<?php

function resgistrarUsu($link){
    $consulta = " select * from login where usuario ='$_POST[usuario]'";
    $r = mysqli_query($link,$consulta);
    $num = mysqli_num_rows($r);
    if($num == 0){

        $nom = $_POST['nombre'];
        $ape = $_POST['apellido'];
        $usuario = $_POST['usuario'];			
        $tipo = $_POST['tipo'];
        $promou = $_POST['promocion'];
        $nacionalidad = $_POST['nacionalidad']; 
        $hash=password_hash($_POST['password'], PASSWORD_DEFAULT);
        $con_agregar="INSERT INTO login(nombre,apellido,usuario,password,tipo,fk_nacionalidad)
					  VALUES('$nom','$ape','$usuario','$hash','$tipo','$nacionalidad')";
		include 'conexion.php';
        mysqli_query($link,$con_agregar);	  
		$iden = "SELECT login.idUser 
				 FROM login WHERE login.usuario = '$usuario'";
		$v = mysqli_query($link,$iden);
		$arrv = mysqli_fetch_array($v);
		$historial = "INSERT INTO historial (fk_usuario,fk_promocion,estado)
					  VALUES ('$arrv[0]','$promou','A')";		
       	mysqli_query($link,$historial);
		echo $historial;
        echo mysqli_error($link);    
        header('location:index.php');
        
    }
    else{
        echo "ya esta registrado";
    }
}


function login($link){
    
    $sql = "select * from login where usuario = '$_POST[usuario]'";
    $r = mysqli_query($link,$sql);
    $numero = mysqli_num_rows($r);
    if($numero == 1){
        $arr = mysqli_fetch_array($r);
        if(password_verify($_POST['password'],$arr['password'])){ 
            $_SESSION['tipo'] = $arr['tipo']; 
            $_SESSION['nomb'] = $arr['nombre'];
            if ($arr['tipo']!= 'a'){
               $_SESSION['promo'] = $arr['fk_promocion']; 
            }
            
            header("location:index.php");
        } else{
            echo "Clave invalida";
        }
        
    }else{
        echo "Usuario no existe";
    }
}


function cerrarsesion($link){
	session_destroy();
   header("location:index.php");
}

?>
