<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>registro fabrica</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
 <section class="principal">
     
     
     
<form action="registrouser.php" method="post">  
Nombre de usuario <input type="text" name="nombre" id="nombre" class="campo" required><span id="nameInfo"></span><br><br>
Apellido de usuario <input type="text" name="apellido" id="apellido" class="campo" required><span id="apellidoInfo"></span><br><br>
Usuario <input type="text" name="usuario" id="usuario" class="campo" required><span id="usuarioInfo"></span><br><br>
Clave <input type="password" name="password" id="password" class="campo"><span id="passwordInfo"></span><br><br>
Confirmar clave <input type="password" name="Cpassword" id="Cpassword"  class="campo"><span id="conpasswordInfo"></span><br><br>
Tipo <select name="tipo" id="tipo" class="campo">
    <option value="A">Administrador</option>
    <option value="F">Formador</option>
    <option value="R">Responsable de promocion</option>
    </select><br><br>

    
Promocion <select name="promocion" id="promocion" class="campo"><!--cambiar-->
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
         
    
Nacionalidad <select name="nacionalidad" id="nacionalidad" class="campo"><!--cambiar-->
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
    
Promocion 2da <select name="promocion2" id="promocion2" class="campo"><!--cambiar-->
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
    
Promocion 3ra <select name="promocion3" id="promocion3" class="campo"><!--cambiar-->
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
    
<input type="hidden" name="oculto" value="1">
<input type="submit" class="boton"> 
</form>
     
     
     
</section>    
<script type="text/javascript" src="js/sesion.js"></script>   
</body>
</html>
