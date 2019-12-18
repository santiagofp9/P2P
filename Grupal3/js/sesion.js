
function validarNombre(){
    
    var nombre = document.getElementById("nombre").value;
    nombre= nombre.trim();// se usa el .value para la validacion del elemento
    var patron =  /^(([A-ZÑÁÉÍÓÚÀÈÌÒÙÄËÏÖÜÂÊÎÔÛ]|[a-zñáéíóúàèìòùäëïöüâêîôû])+[\s]*){1}$/;
    
    if (nombre.length < 2 ){
        document.getElementById("nameInfo").classList.add("error")
        document.getElementById("nameInfo").innerHTML = "Por favor usar mas de 2 caracteres"
    }else if(!patron.test(nombre)){       
        document.getElementById("nameInfo").classList.add("error")
        document.getElementById("nameInfo").innerHTML = "Por favor no usar caracteres especiales"
        
    }else{
        document.getElementById("nameInfo").classList.remove("error")
        document.getElementById("nameInfo").innerHTML = ""
    }
   
}

function validarApellido(){
    var nombre = document.getElementById("apellido").value;// se usa el .value para la validacion del elemento
    nombre = nombre.trim();
    var patron =  /^(([A-ZÑÁÉÍÓÚÀÈÌÒÙÄËÏÖÜÂÊÎÔÛ]|[a-zñáéíóúàèìòùäëïöüâêîôû])+[\s]*){1}$/;
    
    if (nombre.length < 2 ){
        document.getElementById("apellidoInfo").classList.add("error")
        document.getElementById("apellidoInfo").innerHTML = "Por favor usar mas de 2 caracteres"
        
    }else if(!patron.test(nombre)){
        document.getElementById("nameInfo").classList.add("error")
        document.getElementById("nameInfo").innerHTML = "Por favor no usar caracteres especiales"
        
    }else{
       document.getElementById("apellidoInfo").classList.remove("error")
        document.getElementById("apellidoInfo").innerHTML = "" 
    }
   
}

function validarusuario(){
    var patron = /^(([A-ZÑÁÉÍÓÚÀÈÌÒÙÄËÏÖÜÂÊÎÔÛ]|[a-zñáéíóúàèìòùäëïöüâêîôû])+[\s]*){1}$/;
    var vusuario = document.getElementById("usuario").value;
    vusuario = vusuario.trim();
   
    if(vusuario.length < 2){
        document.getElementById("usuarioInfo").classList.add("error")
        document.getElementById("usuarioInfo").innerHTML = "Por favor usar mas de 2 caracteres" 
    } else if(!patron.test(vusuario)){ 
        document.getElementById("usuarioInfo").classList.add("error")
        document.getElementById("usuarioInfo").innerHTML = "Por favor no usar caracteres especiales";
    }else{
        document.getElementById("usuarioInfo").classList.remove("error")
        document.getElementById("usuarioInfo").innerHTML = ""  
    }
    
    
    
}


function passcar() {
    
    var valpass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/; // esta funcion cubre el largo de los 
    var password = document.getElementById("password").value;
    password = password.trim();
    
    if(password.length < 2 ){
        document.getElementById("passwordInfo").classList.add("error")
        document.getElementById("passwordInfo").innerHTML = "Por favor usar mas de 2 caracteres"   
    }
    else if(!valpass.test(password)){ 
        document.getElementById("passwordInfo").classList.add("error")
        document.getElementById("passwordInfo").innerHTML = "Confirmar la clave";
    }else{
       document.getElementById("passwordInfo").classList.remove("error")
        document.getElementById("passwordInfo").innerHTML = ""
    }
    
}


function igualdad(){
    
    var clave = document.getElementById("password").value;
    var cclave = document.getElementById("Cpassword").value;
    
    
  if (clave != cclave) {
    document.getElementById('passwordInfo').classList.add ("error")
    document.getElementById('passwordInfo').innerHTML = 'La clave no es igual';
     
  } else {
    document.getElementById('passwordInfo').classList.remove ("error")
    document.getElementById('passwordInfo').innerHTML = "";
  }
    

}

document.getElementById("nombre").onblur = validarNombre;
document.getElementById("apellido").onblur = validarApellido;
document.getElementById("password").onblur = passcar;
document.getElementById("Cpassword").onblur = igualdad;
document.getElementById("usuario").onblur = validarusuario;