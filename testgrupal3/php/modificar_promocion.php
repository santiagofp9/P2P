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
							$promocion = $_GET['mod'];

							$sql_mod ="SELECT nombre, ano, fk_fabrica FROM promocion 
			   				where id_promocion ='$promocion'";

							include 'conexion.php';
							$re_mod=mysqli_query($link,$sql_mod);
							$arr_mod=mysqli_fetch_array($re_mod);
			
					?> 
	

					<div class="contenido">
						<div class="for_mod">
							<form method="post" class="table-responsive{-sm|-md|-lg|-xl} ">
								<p><center>MODIFICAR PROMOCION</center></p>
					
									Nombre <br><input type="text" name="nombre" id="nombre" value="<?php echo $arr_mod[0]; ?>" class="form-control">
						   					<span id="nameInfo"></span><br>

									Año   <br><input type="date" name="ano" id="ano" value="<?php echo $arr_mod[1]; ?>" class="form-control">
						   					<span id="anoInfo"></span><br>
				
									Fabrica<br>		
												<select name="fabrica" class="form-control">
													<?php 
														$consulta_nac="select id_fabrica,nombre, fk_ciudad from fabrica";
														$pro=mysqli_query($link,$consulta_nac);
														while ($arrpro = mysqli_fetch_array($pro)) { ?>
															<option  value="<?php echo $arrpro[0]; ?>" 
																<?php if ($arr_mod[2]== $arrpro[0]) {
																			echo 'selected="selected"';
																		} ?>>
																<?php echo $arrpro[1]; ?>
															</option>					
													<?php } ?> 					
												</select>
												<br><br>
						
									<div class="row w-100 align-items-center">
    										<div class="col text-center">
    											<input type="submit" value="Modificar" class="btn btn-primary">
    											<input type="button" value="Cancelar" onclick="document.location.href='promociones.php'" class="btn btn-danger"> 
										
    										</div>	
    								</div>			
							</form>
						</div>	
					</div>


						<?php 
							if (isset($_POST['nombre'])) {
								$nom = $_POST['nombre'];
								$an = $_POST['ano'];
								$fab = $_POST['fabrica'];
		

								$sql_up="UPDATE promocion 
										SET nombre='$nom', ano='$an', fk_fabrica='$fab'
										WHERE id_promocion='$promocion'";

								mysqli_query($link,$sql_up);?>
								<script type="text/javascript">
									document.location.href='promociones.php';
								</script>

							<?php	
							}	
 						?>
 				</div>
			</div>
		</div>
	</div>
    		<script src="../js/bootstrap.min.js"></script>
 </body>
</html>
