<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.: Tomillo & F5 :.</title>

    
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sb-admin.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
 	<script src="js/jquery-1.10.2.js"></script>
 </head>

 <body>

  <div id="wrapper">
	<?php
     if(isset($_SESSION['nomb'])){
         if($_SESSION['tipo'] == 'a'){
             include 'espejoa.php';
         }else if($_SESSION['tipo'] == 'r'){
             include 'espejor.php';
             
         }else{
             include 'espejof.php';
         }
         
         echo "Bienvenido ".$_SESSION['nomb'];
     }else{?>
         <section>          
             <nav>
                 <a href="registro.php" class="btn btn-primary" role="button">Registro</a>
                 <a href="login.html" class="btn btn-primary" role="button">Login</a>
             </nav>
         </section>
<?php     
     }   
?>
			
      
    
    <div>
   		<img src="img/logop2p.png"class="p2p">

     </div>
     <div class="lema">
     	<h3>"No venimos a vendernos, porque estamos seguros que nuestro producto por si solo puede convencerte.
		Hablamos sólo lo necesario, pero hacemos todo lo posible
		empleando herramientas tecnológicas, cuidando el medio ambiente y trabajando siempre en grupo"</h3>



     </div>

  </div>

  

<script src="js/bootstrap.min.js"></script>

  </body>
</html>
