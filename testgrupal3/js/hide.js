$(document).ready(function(){
    

$( "#adm" ).click(function() {
  $( "#captcha" ).show();
    $("#botontest").show();
    $("#benviar").attr("disabled",true);
    
});
    /*
$("#resultado").blur(function(){
  if("#oculto1"+"#oculto2" == $("#resultado").){
     
     $("#benviar").attr("disabled",false);
    
     }else{
      /* resultado incorrecto*/
    /* }
    
});
    */
    
$( "#re" ).click(function() {
  $( "#captcha" ).hide();
    $("#botontest").hide();
    $("#benviar").attr("disabled",false);
}); 
 
    
    
    
});
