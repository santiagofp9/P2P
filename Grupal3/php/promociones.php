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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>
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
  
  		    <div class="col-md-12" id="target">
                  <div class="btn-group pull-right">
                      <a class="btn btn-default" name="agregar" id="agregar"><i class="fa fa-users" aria-hidden="true"></i> Nueva Promocion</a>
                  </div> 
  			          <h1>PROMOCIONES</h1>
  				        <a href="" class="btn btn-default" id="cmd"><i class='fa fa-download'></i> Descargar</a>
                  <script type="text/javascript" src="../js/pdf.js"></script>
    							<br><br>
    
      			 <div class="container table-sm table-responsive{-sm|-md|-lg|-xl} justify-content-between">
              
                  <form method="post" class="form-inline ">
                      <div class="form-group col-md-11">
                          <input type="" name="buscar" placeholder="Busqueda" class="form-control mr-sm-6"> 
                      </div>
                      <div class="form-group col-md-1">
                          <input type="submit" id="buscar" value="Buscar" class="btn btn-success">
                      </div>
                  </form>   
              </div>
              <br>
              <tr>
              </tr>           
    
              
              <div class="container table-sm">
          
                  <table class="table table-bordered table-hover" id="tabla1" border="0">
            
                      <thead class="thead-light">
                        <tr>
                            <th class="datos">número</th>
                            <th class="datos">nombre</th>
                            <th class="datos">año</th>
                            <th class="datos">fabrica</th>
                            <th class="datos">ciudad</th>
                        </tr>
      
                              <?php 
                                include 'conexion.php';
                                if (isset($_POST['buscar'])) {
                                  $bus = $_POST['buscar'];
                        
                                  if ($bus!="") {
                                   $cond="AND (promocion.nombre like '%$bus%' OR fabrica.nombre like '%$bus%' OR ciudad.nombre like '%$bus%')";
                                    }else{
                                          $cond="";
                                    }           
                                  }
                                  else{
                                      $cond="";
                                  }

                      
                                $list="SELECT promocion.nombre, promocion.ano, fabrica.nombre, ciudad.nombre, promocion.id_promocion  FROM promocion,fabrica, ciudad where promocion.fk_fabrica=fabrica.id_fabrica and fabrica.fk_ciudad=ciudad.id_ciudad and promocion.estado='1' $cond";

                                $con_list=mysqli_query($link,$list);
                                $cont=1;
                      
                                  while ($arrlist= mysqli_fetch_array($con_list)) {?>
                                  <tr>
                                      <td><?php echo $cont; ?></td>
                                      <td><?php echo $arrlist[0]; ?></td>
                                      <td><?php echo $arrlist[1]; ?></td>
                                      <td><?php echo $arrlist[2]; ?></td>
                                      <td><?php echo $arrlist[3]; ?></td>
                                  
                                      <td>
                                          <a href="listado_promocion.php?lis=<?php echo $arrlist[4]; ?>" class="btn btn-warning"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                          <a href="modificar_promocion.php?mod=<?php echo $arrlist[4]; ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                          <a class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash-o" aria-hidden="true"></i></a>                                          
                                      </td>
                                  </tr>     
                          <?php 
                              $cont++;
                          } ?>
                      </thead>
                  </table>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <h5 class="modal-title" id="exampleModalLabel">Desea Eliminar el Registro</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">                  
                          </button>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <a href="eliminar_promocion.php?eli=<?php echo $arrlist[4]; ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- Modal -->
              </div>
          </div>


          <div class="overlay" id="overlay">
                      <div class="popup">
                      	<br>
                      	
                        <p><center>AGREGAR PROMOCION</center></p>
                       
                        <form method="post" action="agregar_promocion.php" onsubmit="return validar()">
                          Nombre <br><input type="text" name="nombre" id="nombre" class="form-control" onblur="validarNombre()">

                                 <span id="nombreInfo"></span><br>

                          Año <br><select name="ano" id="ano" class="form-control">
                          <?php
                            for ($i=2019; $i<=3000 ; $i++) {?>
                            <option value="<?php echo $i; ?>">
                              <?php
                                echo $i;
                              ?>
                            </option>
                          <?php
                            }
                          ?>
                          </select>
                                 <span id="anoInfo"></span><br>
                          
                          Fabrica<br>
                                 
                                  <select name="fabrica" class="form-control">
                                      <?php 
                                        include 'conexion.php';
                                        $consulta_ciu="select id_fabrica,nombre, fk_ciudad from fabrica where estado='1'";
                                        $ci=mysqli_query($link,$consulta_ciu);
                                        while ($arr = mysqli_fetch_array($ci)) {?>
                                                  <option  value="<?php echo $arr[0]; ?>">
                                                                  <?php echo $arr[1]; ?>                    
                                                  </option>         
                                      <?php } ?>          
                                  </select><br>       
                         
                          

                            <div class="row w-100 align-items-center">
                                <div class="col text-center">
                                        <input type="submit" value="Agregar" class="btn btn-primary">
                                        <input type="button" value="Cancelar" id="cancelar" class="btn btn-danger"> 
                                 </div>  
                            </div>           
                    </form>  
                </div>    
            </div>

            <script type="text/javascript" src="../js/script.js"></script>
            <hr>
      </div>
   </div>
 </div>

<script type="text/javascript" src="../js/script.js"></script>    
<script src="../js/bootstrap.min.js"></script>

  </body>
</html>