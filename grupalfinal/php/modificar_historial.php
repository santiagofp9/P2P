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
                    <li><a href="historial.php"><i class="fa fa-smile-o"></i> Historial </a></li>    
              </ul>


              <ul class="nav navbar-nav navbar-right navbar-user">
                
                    <li class="dropdown user-dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Usuario <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="../index.php">Configuracion</a></li>
                            <li><a href="../index.php">Salir</a></li>
                        </ul>
                    </li>
              </ul>
          </div>
      </nav>


    
    	<div id="page-wrapper">
			<div class="row">
				<div class="col-md-12">

	<?php 
							$usuh = $_GET['mod'];
							$sql_upd ="UPDATE historial 
									   SET estado = 'I' 
									   WHERE fk_usuario = $usuh";
							include 'conexion.php';
							$re_upd=mysqli_query($link,$sql_upd);							
					?> 

						<div class="contenido">
								<div class="for_mod">
									<form method="post" class="table-responsive{-sm|-md|-lg|-xl}">
									<p><center>MODIFICAR USUARIO</center></p>
					
									Asigne Nueva Promoción<br>		
											<select name="promo" class="form-control">
												<?php 
													$con_prom="select id_promocion,nombre from promocion";
													$prom=mysqli_query($link,$con_prom);
													while ($arrprom = mysqli_fetch_array($prom)) { ?>
														<option value="<?php echo $arrprom[0];?>"selected>
                    										<?php echo $arrprom[1];?>                               
                										</option>					
												<?php } ?> 					
											</select>
									<br><br>
						
									<div class="row w-100 align-items-center">
    										<div class="col text-center">
    											<input type="submit" value="Asignar" class="btn btn-primary">
    											<input type="button" value="Cancelar" onclick="document.location.href='historial.php'" class="btn btn-danger"> 
										
    										</div>	
    								</div>			
									</form>
									
								</div>	
						</div>

<?php 
								if (isset($_POST['promo'])) {
									$prom = $_POST['promo'];
		
									$sql_in ="INSERT INTO historial (fk_usuario,fk_promocion, estado)
									  		  VALUES ($usuh,'$prom','A')";
									mysqli_query($link,$sql_in);?>
									<script type="text/javascript">
										document.location.href='historial.php';
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
