    var maximo = 100;
    var rango = maximo+1;
    
    function aleatorio(){
        var valor1 = parseInt(Math.random()*(rango));
        var valor2 = parseInt(Math.random()*(rango));
        document.getElementById("valor1").innerHTML = valor1;
        document.getElementById("valor2").innerHTML = valor2;
    }
    
    
    function validarResultado(){
        if(document.getElementById("respuesta").value!=null && document.getElementById("respuesta").value!=""){ if((parseInt(document.getElementById("valor1").innerHTML)+parseInt(document.getElementById("valor2").innerHTML))==document.getElementById("respuesta").value){
            
            document.getElementById("captcha").style.display = "none";
            document.getElementById("benviar").disabled = false;
            document.getElementById("mensajecapr").innerHTML = "Captcha verificada";

        }else{
            document.getElementById("benviar").disabled = true;
            

        }

    }else{

        document.getElementById("mensajecap").innerHTML = "Introducir el resultado";

    }

}

aleatorio();  




$(document).ready(function(){
    

$( "#adm" ).click(function() {
  $( "#captcha" ).show();
    $("#botontest").show();
    $("#benviar").attr("disabled",true);
    
});
    
$( "#re" ).click(function() {
  $( "#captcha" ).hide();
    $("#benviar").attr("disabled",false);
}); 
    
$( "#fo" ).click(function() {
  $( "#captcha" ).hide();
    $("#benviar").attr("disabled",false);
});
    

               
    /*
    if ($("#respuesta").val() == resultado){
        
         $("#benviar").attr("disabled",false);
        $( "#captcha" ).hide();
        $("#mensajecap").html("Validada");
        $("#mensajer").html("Captcha verificada")
        
    }else{
        
        $("#mensajecap").html("Invalida");
            
    }*/
    
   
    
});
 
