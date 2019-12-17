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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.1.135/jspdf.min.js"></script>-->    
    <script src="../js/stacktable.js"></script>
	<link href="../css/stacktable.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">

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
          <a class="navbar-brand" href="../index.php"> TOMILLO <sup><small><span class="label label-warning">F5</span></small></sup> </a>
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
        </div><!-- /.navbar-collapse -->
    </nav>

    
    <div id="page-wrapper">
      <div class="row">
        <div class="col-md-12">
                  <div class="btn-group pull-right">
                      <a class="btn btn-default" name="agregar" id="agregar"><i class="fa fa-user fa-fw" aria-hidden="true"></i> Nuevo Coder</a>
                  </div>        
                  <h1>CODERS</h1>
                  <br>
              </div> 
          
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


    
          <table class="table table-bordered table-hover" id="tabla1" border="0">
          	
            <thead>
              <tr>
                    <th class="datos">número</th>
                    <th class="datos">nombre</th>
                    <th class="datos">apellido</th>
                    <th class="datos">Dni/Nie</th>
                    <th class="datos">Fecha de Nacimiento</th>
                    <th class="datos">Nacionalidad</th>
                    <th class="datos">Promocion</th>
              </tr>
      
                    <?php 
                      include 'conexion.php';
                      if (isset($_POST['buscar'])) {
                          $bus = $_POST['buscar'];
                          echo $bus;
                          if ($bus!="") {
                              $cond="AND (coder.nombre like '%$bus%' OR coder.apellido like '%$bus%')";
                          }else{
                              $cond="";
                          }           
                      }
                      else{
                        $cond="";
                      }
                      
                      $list="SELECT coder.nombre, coder.apellido, coder.dni_nie, coder.fecha_nac, pais.nacionalidad, promocion.nombre, coder.id_coder FROM coder inner join pais on coder.fk_nacionalidad=pais.id_pais inner join promocion on coder.fk_promocion=promocion.id_promocion where coder.fk_nacionalidad=pais.id_pais AND coder.fk_promocion=promocion.id_promocion AND coder.estado='1' $cond";
          // echo $list;

                      $con_list=mysqli_query($link,$list);
                      $cont=1;
                      while ($arrlist= mysqli_fetch_array($con_list)) {?>
                       <tr>
                            <td><?php echo $cont; ?></td>
                            <td><?php echo $arrlist[0]; ?></td>
                            <td><?php echo $arrlist[1]; ?></td>
                            <td><?php echo $arrlist[2]; ?></td>
                            <td><?php echo $arrlist[3]; ?></td>
                            <td><?php echo $arrlist[4]; ?></td>
                            <td><?php echo $arrlist[5]; ?></td>
                            <td><a href="modificar_coder.php?mod=<?php echo $arrlist[6]; ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="eliminar_coder.php?eli=<?php echo $arrlist[6]; ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                      </tr>     
                    <?php 
                    $cont++;
                    } ?>
            </table>             
        </div>
      </div>
      <div class="overlay" id="overlay">
    <div class="popup">
      <p>AGREGAR CODER</p>
      <form method="post" action="agregar_coder.php" onsubmit="return validarCoder()" >
        Nombre <br><input type="text" name="nombre" id="nombre" class="form-control" onblur="validarNombreApellido('nombre')">
        <span id="nombreInfo"></span><br>
        Apellidos <br><input type="text" name="apellido" id="apellido" class="form-control" onblur="validarNombreApellido('apellido')">
        <span id="apellidoInfo"></span><br>
        Dni/Nie <br><input type="text" name="dni" id="dni" class="form-control" onblur = "validarDNI()">
        <span id="dniInfo"></span><br>
        Fecha de Nacimiento<br><br> 
        <div class="form-row">                   
          <div class="form-group col-md-4">
          Año<br>
          <select name="anyo" id="anyo" class="form-control">
            <?php
              for ($i=1950; $i<=2002 ; $i++) {?>
                <option value="<?php echo $i; ?>">
                  <?php
                    echo $i;
                  ?>
                </option>
                <?php
              }
            ?>          
          </select>
          </div>
          <div class="form-group col-md-4">
          Mes<br>
          <select name="mes" id="mes" class="form-control">
            <?php
              for ($i=1; $i<=12 ; $i++) {?>
                <option value="<?php echo $i; ?>">
                  <?php echo $i; ?>
                </option>
                <?php
              }
            ?>
          </select>
          </div>
          <div class="form-group col-md-4">
          Día<br>
          <select name="dia" id="dia" onclick="dias()" class="form-control"></select>
          </div>
        <br>
        Nacionalidad<br>
        <select name="nac" class="form-control">
          <?php 
            $consulta_nac="select id_pais,nacionalidad from pais";
            $na=mysqli_query($link,$consulta_nac);
            while ($arrna = mysqli_fetch_array($na)) {?>
              <option  value="<?php echo $arrna[0]; ?>">
                <?php echo $arrna[1]; ?>
              </option>         
          <?php } ?>          
        </select>
        </div>
        <br>       
        Promocion<br>   
        <select name="promo" class="form-control">
        <?php 
          $consulta_nac="select id_promocion,nombre from promocion where estado='1'";
          $pro=mysqli_query($link,$consulta_nac);
          while ($arrpro = mysqli_fetch_array($pro)) { ?>
            <option  value="<?php echo $arrpro[0]; ?>">
              <?php echo $arrpro[1]; ?>
            </option>         
        <?php } ?>          
        </select><br>
        <div class="row w-100 align-items-center">
            <div class="col text-center">
              <input type="button" value="Cancelar" id="cancelar" class="btn btn-danger"> 
              <input type="submit" value="Agregar" class="btn btn-primary">
            </div>  
        </div>           
      </form>       
    </div>    
  </div>
  <script type="text/javascript" src="../js/script.js"></script>
    <hr>
      </div><!-- /#page-wrapper -->

  </div><!-- /#wrapper -->

    <!-- JavaScript -->

<script src="../js/bootstrap.min.js"></script>

  </body>
</html>