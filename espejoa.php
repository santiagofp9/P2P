<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       
	<div class="navbar-header">
    	<a class="navbar-brand" href="./">TOMILLO <sup><small><span class="label label-warning">F5</span></small></sup> </a>
	</div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
    	<ul class="nav navbar-nav side-nav">
        	<ul class="nav navbar-nav">
        	</ul>
        		<li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
          		<li><a href="php/fabricas.php"><i class='fa fa-tasks'></i> Fabricas </a></li>
          		<li><a href="php/promociones.php"><i class="fa fa-users"></i> Promociones </a></li>
          		<li><a href="php/coders.php"><i class="fa fa-smile-o"></i> Coders </a></li>
		<?php
     			if(isset($_SESSION['nomb'])){
         		echo "Bienvenido ".$_SESSION['nomb'];
     	?>
         		<section>
             		<nav>
                 		<a href="registro.php" class="btn btn-primary" role="button">Registrar</a>
                 		<form action="controlador.php" method="post" class="formlogin">
    						<input type="hidden" name="oculto" value="3">
    						<button type="submit" class="btn btn-success">Cerrar Sesión</button> 
						</form> 
             		</nav>
                 </section>
		<?php } ?>
          		</ul>

    
    </div>
    </nav>
