<?php 
session_start();
include 'solve.php';
$_SESSION["num1"] = rand(1,15); $_SESSION["num2"] = rand(1,12);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>registro fabrica</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
 <section class="principal">
     
     
     
<form action="controlador.php" method="post">  
Nombre de usuario <input type="text" name="nombre" id="nombre" class="campo" required><span id="nameInfo"></span><br><br>
Apellido de usuario <input type="text" name="apellido" id="apellido" class="campo" required><span id="apellidoInfo"></span><br><br>
Usuario <input type="text" name="usuario" id="usuario" class="campo" required><span id="usuarioInfo"></span><br><br>
Clave <input type="password" name="password" id="password" class="campo"><span id="passwordInfo"></span><br><br>
Confirmar clave <input type="password" name="Cpassword" id="Cpassword"  class="campo"><span id="conpasswordInfo"></span><br><br>
Tipo <select name="tipo" id="tipo" class="campo">
    <option value="f">Formador</option>
    <option id="re" value="r">Responsable de promocion</option>
    <option id="adm" value="a" >Administrador</option>
    </select><br><br>
             <!--CAPTCHA-->
            <div id="captcha">
                
                <?php echo $_SESSION["num1"]; ?> + <?php echo $_SESSION["num2"];?>
                 <input type="hidden" name="oculto1" id="oculto1" value="<?php echo $_SESSION["num1"]; ?>"> 
                 <input type="hidden" name="oculto2" id="oculto2" value="<?php echo $_SESSION["num2"];?>"> 
                <!--<input type="button" id="bcaptcha" value="enviar">-->
                <input type="text" name="captcha" id="resultado" required><br><br>
    
                 <!--CAPTCHA-->
            </div>
    
    
    
    
    
    
Promocion <select name="promocion" id="promocion" class="campo">
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
         
    
Nacionalidad <select name="nacionalidad" id="nacionalidad" class="campo"><script type="text/javascript" src="js/hide.js"></script>
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
<input type="submit" id="benviar" class="boton">

</form>
 
     
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/hide.js"></script>
<script type="text/javascript" src="js/sesion.js"></script>   
</body>
</html>
