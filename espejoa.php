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

    
    <link href="Grupal3/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="Grupal3/css/sb-admin.css">
    <link rel="stylesheet" href="Grupal3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Grupal3/css/style.css">
    
 	<script src="Grupal3/js/jquery-1.10.2.js"></script>
 </head>

 <body>

  <div id="wrapper">
<?php
     
     if(isset($_SESSION['nomb'])){
         
         echo "Bienvenido ".$_SESSION['nomb'];
     ?>
         <section>
             
             <nav>
                 <a href="Grupal3/registro.php" class="btn btn-primary" role="button">Registrar</a>
                 <form action="Grupal3/controlador.php" method="post" class="formlogin">
    				<input type="hidden" name="oculto" value="3">
    				<button type="submit" class="btn btn-success">Cerrar Sesión</button> 
				</form> 
             </nav>
     
         </section>
<?php     
     }   
?>
     
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       
        <div class="navbar-header">
      		<a class="navbar-brand" href="./">TOMILLO <sup><small><span class="label label-warning">F5</span></small></sup> </a>
        </div>
        
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          	<ul class="nav navbar-nav side-nav">
         		<ul class="nav navbar-nav">
          		</ul>
          			 <li><a href="Grupal3/index.php"><i class="fa fa-home"></i> Inicio</a></li>
          			<li><a href="Grupal3/php/fabricas.php"><i class='fa fa-tasks'></i> Fabricas </a></li>
          			<li><a href="Grupal3/php/promociones.php"><i class="fa fa-users"></i> Promociones </a></li>
          			<li><a href="Grupal3/php/coders.php"><i class="fa fa-smile-o"></i> Coders </a></li>
          		</ul>

        </div>
    </nav>
    
    <div>
   		<img src="Grupal3/img/logop2p.png"class="p2p">

     </div>
     <div class="lema">
     	<h3>"No venimos a vendernos, porque estamos seguros que nuestro producto por si solo puede convencerte.
		Hablamos sólo lo necesario, pero hacemos todo lo posible
		empleando herramientas tecnológicas, cuidando el medio ambiente y trabajando siempre en grupo"</h3>



     </div>

  </div>

  

<script src="Grupal3/js/bootstrap.min.js"></script>

  </body>
</html>