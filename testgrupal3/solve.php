
<script type="text/javascript" src="js/hide.js"></script>

<?php 


if(isset($_SESSION["num1"]) && isset($_SESSION["num2"]) && isset($_POST["captcha"])){ 
    $resp = $_SESSION["num1"]+$_SESSION["num2"]; 
    $captcha = $_POST["captcha"]; 
    if($resp==$captcha){ 
        echo "Captcha Correcto";
    
      /*echo" <script type='text/javascript'> 
        function enable_disable() {  
            $('#bcaptcha :button').prop('disabled', false); 
        } 
    </script> ";*/ 
        
    }else{ 
        echo "Captcha Incorrecto";
    } 
} 

?>