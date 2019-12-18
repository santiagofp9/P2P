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
    <option value="a">Administrador</option>
    <option value="f">Formador</option>
    <option value="r">Responsable de promocion</option>
    </select><br><br>

    
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
         
    
Nacionalidad <select name="nacionalidad" id="nacionalidad" class="campo">
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
<input type="submit" class="boton"> 
<span id="mensajecapr"></span>
</form>
  <div id="captcha">
                
                <label class="operacionc" for="respuesta">
                 <div id="valor1"></div><div>+</div><div id="valor2"></div>
                </label>
                <input type="text" name="captcha" id="respuesta" onblur="validarResultado()"><br><br>
                 <p>Introduzca los valores presentados y su resultado</p>
                <?php /*?><button id="benviar1">Verificar</button><?php */?>
                <span id="mensajecap"></span>
    
                 
 </div>   
     
     
</section>    
<script type="text/javascript" src="js/sesion.js"></script>   
</body>
</html>
