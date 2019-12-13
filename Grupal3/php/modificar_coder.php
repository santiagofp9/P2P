<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.: Tomillo & F5 :.</title>

    <link rel="stylesheet" href="../css/bootstrap.css" >
    <link rel="stylesheet" href="../css/sb-admin.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/stacktable.css">

    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/stacktable.js"></script>
     

 </head>

<body>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#tabla1').stacktable();
			});
		</script>



  <div id="wrapper">

      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        
          <div class="navbar-header">
                   <a class="navbar-brand" href="./"> TOMILLO <sup><small><span class="label label-warning">F5</span></small></sup> </a>
          </div>

        
          <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav side-nav">
                  
                    <li><a href="../index.php"><i class="fa fa-home"></i> Inicio</a></li>
                    <li><a href="fabricas.php"><i class='fa fa-tasks'></i> Fabricas </a></li>
                    <li><a href="promociones.php"><i class="fa fa-users"></i> Promociones </a></li>
                    <li><a href="coders.php"><i class="fa fa-smile-o"></i> Coders </a></li>
                         
              </ul>


              <ul class="nav navbar-nav navbar-right navbar-user">
                
                    <li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Usuario <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php">Configuracion</a></li>
                            <li><a href="index.php">Salir</a></li>
                        </ul>
                    </li>
              </ul>
          </div>
      </nav>


    
    	<div id="page-wrapper">
			<div class="row">
				<div class="col-md-12">
					<?php 
						$coder = $_GET['mod'];

						$sql_mod ="SELECT nombre, apellido, dni_nie,fecha_nac,fk_nacionalidad,fk_promocion 
			   						FROM coder 
			   						where id_coder='$coder'";

						include 'conexion.php';
						$re_mod=mysqli_query($link,$sql_mod);
						$arr_mod=mysqli_fetch_array($re_mod);
					?>
					
					<div>
						<div>
							
							<form method="post" class="table-responsive{-sm|-md|-lg|-xl} " onsubmit="return validarCoder()">
								<p><center>MODIFICAR CODER</center></p>
								Nombre <br><input type="text" name="nombre" id="nombre" value="<?php echo $arr_mod[0]; ?>" class="form-control" onblur="validarNombreApellido('nombre')">
										<span id="nombreInfo"></span><br><br>
								Apellidos <br><input type="text" name="apellido" id="apellido" value="<?php echo $arr_mod[1]; ?>" class="form-control" onblur="validarNombreApellido('apellido')">
										<span id="apellidoInfo"></span><br><br>
								Dni/Nie <br><input type="text" name="dni" id="dni" value="<?php echo $arr_mod[2]; ?>" class="form-control" onblur = "validarDNI()">
										<span id="dniInfo"></span><br><br>
								Fecha de Nacimiento<br><input placeholder="YYYY-MM-DD" type="date" name="fenac" id="fenac" value="<?php echo $arr_mod[3]; ?>" class="form-control"><br>

								Nacionalidad<br>
									<select name="nac" class="form-control">
									<?php 
										include 'conexion.php';
										$consulta_nac="select id_pais,nacionalidad from pais";
										$na=mysqli_query($link,$consulta_nac);
						
										while ($arrna = mysqli_fetch_array($na)) {?>

											<option  value="<?php echo $arrna[0]; ?>" 
												<?php if ($arr_mod[4]== $arrna[0]) {
														echo 'selected="selected"';
													} ?> >
												<?php echo $arrna[1]; ?>
											</option>					
									<?php } ?> 									
									</select><br>				
								
								Promocion<br>		
									<select name="promo" class="form-control">
									<?php 
										$consulta_nac="select id_promocion,nombre from promocion";
										$pro=mysqli_query($link,$consulta_nac);
										while ($arrpro = mysqli_fetch_array($pro)) { ?>
											<option  value="<?php echo $arrpro[0]; ?>" 
													<?php if ($arr_mod[5]== $arrpro[0]) {
														echo 'selected="selected"';
														} ?>>
												<?php echo $arrpro[1]; ?>
											</option>					
									<?php } ?> 					
									</select><br><br>
								
								<div class="row w-100 align-items-center">
    								<div class="col text-center">
    										<input type="submit" value="Modificar" class="btn btn-primary">
    										<input type="button" value="Cancelar" onclick="document.location.href='coders.php'" class="btn btn-danger"> 
									
    								</div>	
    							</div>			
							</form>
						</div>	
					</div>          			
					
					<?php 
						if (isset($_POST['nombre'])) {
							$nom = $_POST['nombre'];
							$ape = $_POST['apellido'];
							$dni = $_POST['dni'];
							$fecha = $_POST['fenac'];
							$nacio = $_POST['nac'];
							$promoc = $_POST['promo'];

							$sql_up="UPDATE coder 
								SET nombre='$nom',apellido='$ape',dni_nie='$dni',fecha_nac='$fecha',fk_nacionalidad='$nacio',fk_promocion='$promoc'
								WHERE id_coder='$coder'";

							mysqli_query($link,$sql_up);?>
							<script type="text/javascript">
								document.location.href='coders.php';
							</script>

						<?php	
						}	
 					?>
				</div>
			</div>
		</div>
  </div>

  		<script type="text/javascript" src="../js/script.js"></script>

		<script src="../js/bootstrap.min.js"></script>

  </body>
</html>