<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>.: Tomillo & F5 :.</title>

    
    <link rel="stylesheet" href="../css/bootstrap.css">
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
                   <a class="navbar-brand" href="../index.php"> TOMILLO <sup><small><span class="label label-warning">F5</span></small></sup> </a>
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
        		<li class="dropdown user-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<?php if(isset($_SESSION['nomb'])){
         				echo "Bienvenido ".$_SESSION['nomb'];?>
					<b class="caret"></b>
				</a>
             	<ul class="dropdown-menu">
					<nav>
                 		<form action="controlador.php" method="post" class="formlogin">
							<li></li><input type="hidden" name="oculto" value="3"></li>
							<li></li><button type="submit" class="btn">Cerrar Sesión</button></li> 
						</form> 
             		</nav> 
					<?php } ?>
             	</ul>
             	</li>
          	  </ul>
          </div>
      </nav>


    
      <div id="page-wrapper">
          <div class="row">
              <div class="col-md-12">        
                  <h1>Historial</h1>
                  <br>
              </div> 
          
              <div class="container table-sm">

                 <table class="table table-bordered table-hover" id="tabla1" border="0">
            
                      <thead class="thead-light">
                        <tr>          
                            <th class="datos">Registro</th>
                            <th class="datos">Usuario</th>
                            <th class="datos">Promocion</th>
                            <th class="datos">Estado</th>
                        </tr>
      
                                <?php 
                                 include 'conexion.php';
                            
                                  $list="SELECT login.usuario, promocion.nombre, historial.estado FROM historial,login,promocion  where historial.fk_usuario=login.idUser and historial.fk_promocion = promocion.id_promocion";
                 
                                  $con_list=mysqli_query($link,$list);
                          
                                  $cont=1;
                                    while ($arrlist= mysqli_fetch_array($con_list)) {?>
                                          <tr>
                                              <td><?php echo $cont; ?></td>
                                              <td><?php echo $arrlist[0]; ?></td>
                                              <td><?php echo $arrlist[1]; ?></td>
                                              <td><?php echo $arrlist[2]; ?></td>
                                              <td><a href="modificar_historial.php?mod=<?php echo $arrlist[2]; ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                              <a class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                          </tr>     
                                <?php 
                                  $cont++;
                                } ?>
                      </thead>
                </table>
                <!-- Modal -->
                
                <!-- Modal -->
            </div>
        </div>

                

      

  <script type="text/javascript" src="../js/script.js"></script>
      <hr>
      </div>
  </div>

<script type="text/javascript" src="../js/script.js"></script>
<script src="../js/bootstrap.min.js"></script>

  </body>
</html>