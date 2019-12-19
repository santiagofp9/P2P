<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.: Tomillo & F5 :.</title>

    
    <link href="../css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/sb-admin.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <script src="../js/jquery-1.10.2.js"></script>
     <!-- Add custom JS pdf here -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/stacktable.js"></script>
	<link href="../css/stacktable.css" rel="stylesheet">

 </head>

<body>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#tabla1').stacktable();
			});
		</script>

	<div id="wrapper">

      <!-- Sidebar -->
	    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	            <!--<span class="sr-only">Toggle navigation</span>-->
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="./">TOMILLO <sup><small><span class="label label-warning">F5</span></small></sup> </a>
	        </div>

	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse navbar-ex1-collapse">
	          	<ul class="nav navbar-nav side-nav">
	         		<ul class="nav navbar-nav">
	          		</ul>
	          			 <li><a href="../index.php?view=home"><i class="fa fa-home"></i> Inicio</a></li>
	          			<li><a href="fabricas.php?view=califications&team_id=1"><i class='fa fa-tasks'></i> Fabricas </a></li>
	          			<li><a href="promociones.php?view=teams"><i class="fa fa-users"></i> Promociones </a></li>
	          			<li><a href="coders.php?view=behavior&team_id=1"><i class="fa fa-smile-o"></i> Coders </a></li>
	          			
	          </ul>


	          	<ul class="nav navbar-nav navbar-right navbar-user">
	            		<li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Usuario <b class="caret"></b></a>
	        				<ul class="dropdown-menu">
	          					<li><a href="index.php?view=configuration">Configuracion</a></li>
	          					<li><a href="logout.php">Salir</a></li>
	        				</ul>
        			</li>
        		</ul>
        </div><!-- /.navbar-collapse -->
    </nav>

     <div id="page-wrapper">

		<div class="row">
  
  		<div class="col-md-12" id="target">
  			<br>
    		<h1>PROMOCION</h1>
  				<a href="" class="btn btn-default" id="cmd"><i class='fa fa-download'></i> Descargar</a>
          		<script type="text/javascript" src="../js/pdf.js"></script>

    		<br><br>

    	<div class="container table-sm table-responsive{-sm|-md|-lg|-xl}">
	
		<table class="table table-bordered table-hover" id="tabla1" border="0">
			<thead class="thead-light">
				<tr>
					<th class="datos">número</th>
					<th class="datos">nombre</th>
					<th class="datos">apellido</th>
					<th class="datos">Nacionalidad</th>
					<th class="datos">Promocion</th>
					
				</tr>
			
				<?php 
					$select=$_GET['lis'];

					include 'conexion.php';
					$list="SELECT coder.nombre, coder.apellido, pais.nacionalidad, promocion.nombre FROM coder INNER JOIN pais on coder.fk_nacionalidad=id_pais inner join promocion on coder.fk_promocion=promocion.id_promocion where coder.fk_nacionalidad=pais.id_pais AND promocion.id_promocion='$select'";
					$con_list=mysqli_query($link,$list);
					$cont=1;
					while ($arrlist= mysqli_fetch_array($con_list)) {?>
						<tr>
						<td><?php echo $cont; ?></td>
						<td><?php echo $arrlist[0]; ?></td>
						<td><?php echo $arrlist[1]; ?></td>
						<td><?php echo $arrlist[2]; ?></td>
						<td><?php echo $arrlist[3]; ?></td>
										
						</tr>			
					<?php 
					$cont++;
					} ?>
			</thead>		
		</table>
	</div>
    	

			<div class="row w-100 align-items-center">
    								<div class="col text-center">
    									<input type="button" value="Regresar" onclick="document.location.href='promociones.php'" class="btn btn-danger"> 							
    								</div>	
    						</div>

	</table>

<script type="text/javascript" src="../js/script.js"></script>
<hr>
      </div><!-- /#page-wrapper -->

  </div><!



<script src="../js/bootstrap.min.js"></script>

 </body>
</html>
