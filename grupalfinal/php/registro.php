<?php 
session_start();
include 'solve.php';
$_SESSION["num1"] = rand(1,100); $_SESSION["num2"] = rand(1,100);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>registro fabrica</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
 <section class="container principal">
     
     
     
<form action="controlador.php" method="post" class="formr form-group" >  
Nombre de usuario <input type="text" name="nombre" id="nombre" class="campo form-control" required><span id="nameInfo"></span><br><br>
Apellido de usuario <input type="text" name="apellido" id="apellido" class="campo form-control" required><span id="apellidoInfo"></span><br><br>
Usuario <input type="text" name="usuario" id="usuario" class="campo form-control" required><span id="usuarioInfo"></span><br><br>
Clave <input type="password" name="password" id="password" class="campo form-control"><span id="passwordInfo"></span><br><br>
Confirmar clave <input type="password" name="Cpassword" id="Cpassword"  class="campo form-control"><span id="conpasswordInfo"></span><br><br>
Tipo <select name="tipo" id="tipo" class="campo form-control">
    <option id="fo" value="f">Formador</option>
    <option id="re" value="r">Responsable de promocion</option>
    <option id="adm" value="a" >Administrador</option>
    </select><br><br>
             <!--CAPTCHA-->
            
            <!--CAPTCHA-->
    
    
    
    
    
Promocion <select name="promocion" id="promocion" class="campo form-control">
        <?php 
            include 'conexion.php';
            $consulta = "select id_promocion, nombre from promocion";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>"selected>
                    <?php echo $arr[1];?>
                               
                </option>
            <?php      }  ?>
        </select><br><br>
         
    
Nacionalidad <select name="nacionalidad" id="nacionalidad" class="campo form-control"><script type="text/javascript" src="js/hide.js"></script>
<?php 
            include 'conexion.php';
            $consulta = "select id_pais, nacionalidad from pais";
            $resultado = mysqli_query($link, $consulta);
            while ($arr = mysqli_fetch_array($resultado)) { ?>
                <option value="<?php echo $arr[0];?>"selected>
                    <?php echo $arr[1];?>
                               
                </option>
            <?php      }  ?>
        </select><br><br>

    
<input type="hidden" name="oculto" value="1">
<input type="submit" id="benviar" class="btn btn-primary boton">
<span id="mensajecapr"></span>

</form>
 <div id="captcha">
                
                <div class="operacionc" for="respuesta">
                 <div id="valor1"></div><div>+</div><div id="valor2"></div><div>=</div>
                <input type="text" name="captcha" id="respuesta" onblur="validarResultado()">
                </div>
                <br><br>
                 <p>Introduzca los valores presentados y su resultado</p>
                <?php /*?><button id="benviar1">Verificar</button><?php */?>
                <span id="mensajecap"></span>
    
                 
 </div>
     
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/hide.js"></script>
<script type="text/javascript" src="js/sesion.js"></script>   
</body>
</html>
