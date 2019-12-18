
    	<ul class="nav navbar-nav side-nav">	
        	<li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
          	<li><a href="php/fabricas.php"><i class='fa fa-tasks'></i> Fabricas </a></li>
          	<li><a href="php/promociones.php"><i class="fa fa-users"></i> Promociones </a></li>
          	<li><a href="php/coders.php"><i class="fa fa-smile-o"></i> Coders </a></li>			
        </ul>
		<ul class="nav navbar-nav navbar-right navbar-user">
        	<li class="dropdown user-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<?php if(isset($_SESSION['nomb'])){
         				echo "Bienvenido ".$_SESSION['nomb'];?>
					<b class="caret"></b>
				</a>
             	<ul class="dropdown-menu">
					<nav>
						<li><a href="registro.php" class="btn" role="button">Registrar</a></li>
                 		<form action="controlador.php" method="post" class="formlogin">
							<li></li><input type="hidden" name="oculto" value="3"></li>
							<li></li><button type="submit" class="btn">Cerrar Sesión</button></li> 
						</form> 
             		</nav> 
					<?php } ?>
             	</ul>
             </li>
          </ul>
