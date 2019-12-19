<?php session_start();?>
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
	  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  <div class="navbar-header">
			  <a class="navbar-brand" href="index.php">TOMILLO<sup><small><span class="label label-warning">F5</span></small></sup></a>
		  </div>
		  <div class="collapse navbar-collapse navbar-ex1-collapse">	  
		       
	<?php
     if(isset($_SESSION['nomb'])){
         if($_SESSION['tipo'] == 'a'){
             include 'php/espejoa.php';
         }else if($_SESSION['tipo'] == 'r'){
             include 'php/espejor.php';
             
             
         }else{
             include 'php/espejof.php';
         }
     }else{?>
         
	<?php } ?>  
       </div>
			
            
	  </nav>
    
    <div><img src="img/logop2p.png"class="p2p"></div>
    <section class="container">
 
 <?php
     if(!isset($_SESSION['nomb'])){?>
         
    
         
	
        
<form action="controlador.php" method="post" class="formlogin">
    <div class="form-group">
    <label>Nombre de usuario</label>
        <input type="text" name="usuario" id="usuario" class="form-control campo"><span id="usuarioInfo"></span><br>
    </div>
    
    <div class="form-group">
        <label>Clave</label>
        <input type="password" name="password" id="password" class="form-control campo"><span id="passwordInfo"></span><br>
    </div>
    <input type="hidden" name="oculto" value="2">
    <button  type="submit" class="btn btn-success">Submit</button>  
</form> 
         <?php 
} ?>     

    
</section>
  </div>

<script src="js/bootstrap.min.js"></script>

 </body>
</html>

