<?php

session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Entrada</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<!-- <br>                           PRIMERO DE LO PRIMERO DE LO PRIMERISIMO: junta c r e a t i v a.
<br>
<br>
<br>
<br>
<br>
1ro: crear variables de session y mirar donde crearlas. 2do: crear if para 3 paginas. 3ro: crear las paginas modulares. 4to: revisar diseño.-->  
    
<?php
if(isset($_SESSION['nombre'])){
        if($_SESSION['tipo']== "A"){
          include 'menua.html';

        } else{
          include 'menub.html';
        } 
        echo "Bienvenido ".$_SESSION['nomb'];
 }  
else{?>
<section class="container">
    
<div class="row bentrada">
    
    <div class="col-xs-6 col-md-6 col-lg-6 registro">
    <a href="registro.html" class="btn btn-danger" role="button">Registrate</a>
    </div>
    
    <div class="col-xs-6 col-md-6 col-lg-6 login">
    <a href="login.html" class="btn btn-primary" role="button">Login</a>
    </div>
    
    
</div>  
</section>
          
    
   
    
</section><?php  
    
    }
    
?>
    <script type="text/javascript" src="js/sesion.js"></script> 
</body>
</html>