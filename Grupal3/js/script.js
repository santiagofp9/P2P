var enviar;
var abrir_btn= document.getElementById("agregar");
var overlay = document.getElementById("overlay");
var cerrar_btn = document.getElementById("cancelar");

abrir_btn.addEventListener('click',function(){
	overlay.classList.add('active');
});

cerrar_btn.addEventListener('click',function(){
	overlay.classList.remove('active');
});

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

function validarNombreApellido(nombape){
	var patron = /^(([A-ZÑÁÉÍÓÚÀÈÌÒÙÄËÏÖÜÂÊÎÔÛ]|[a-zñáéíóúàèìòùäëïöüâêîôû])+[\s]?)+$/;
	enviar = false;
	if(document.getElementById(nombape).value==null || document.getElementById(nombape).value=="" || !patron.test(document.getElementById(nombape).value)){
		enviar = false;
		document.getElementById(nombape+"Info").innerHTML = " Error: "+nombape+" no valido";
	}
	else{
		enviar = true;
		document.getElementById(nombape+"Info").innerHTML = "";
	}
	return enviar;
}

function validarDNI(){
	var patron = /^((([X-Z]|[x-z]){1}[0-9]{7}([\-]|[·])?([A-Z]|[a-z]){1})|([0-9]{8}([A-Z]|[a-z]){1})){1}$/;
	enviar = false;
	if(document.getElementById("dni").value==null || document.getElementById("dni").value=="" || !patron.test(document.getElementById("dni").value)){
		enviar = false;
		document.getElementById("dniInfo").innerHTML = " Error: DNI/NIE no valido";
	}
	else{
		enviar = true;
		document.getElementById("dniInfo").innerHTML = "";
	}
	return enviar;
}

function validarCoder(){
	enviar = false;
	if(validarNombreApellido("nombre") && validarNombreApellido("apellido") && validarDNI()){
		enviar = true;
	}
	return enviar;
}

function validar(){
	enviar = false;
	if(validarNombre()){
		enviar = true;
	}
	return enviar;
}

function validarNombre(){
	var patron = /^(([A-ZÑÁÉÍÓÚÀÈÌÒÙÄËÏÖÜÂÊÎÔÛ]|[a-zñáéíóúàèìòùäëïöüâêîôû])+(([_]|[\-])?[0-9]*)){1}$/;
	enviar = false;
	if(document.getElementById("nombre").value==null || document.getElementById("nombre").value=="" || !patron.test(document.getElementById("nombre").value)){
		enviar = false;
		document.getElementById("nombre"+"Info").innerHTML = " Error: Nombre no valido";
	}
	else{
		enviar = true;
		document.getElementById("nombre"+"Info").innerHTML = "";
	}
	return enviar;
}

function dias(){
	if(document.getElementById("dia").length>0){
		for (var i=document.getElementById("dia").length-1; i>=0 ; i--){
			document.getElementById("dia").remove(i);
		}
		//alert("Vaciar");
	}
	if(document.getElementById("mes").value!=null && document.getElementById("anyo").value!=null){
		if((document.getElementById("mes").value>=1 && document.getElementById("mes").value<=7 && document.getElementById("mes").value%2!=0) || (document.getElementById("mes").value>=8 && document.getElementById("mes").value<=12 && document.getElementById("mes").value%2==0)){
			for (var i=1; i<=31 ; i++) {
				var opcion = document.createElement("option");
				opcion.text = i;
				opcion.value = i;
				document.getElementById("dia").add(opcion);
			}
			//alert("31");
		}
		else if(document.getElementById("mes").value==4 || document.getElementById("mes").value==6 || document.getElementById("mes").value==9 || document.getElementById("mes").value==11){
			for (var i=1; i<=30 ; i++) {
				var opcion = document.createElement("option");
				opcion.text = i;
				opcion.value = i;
				document.getElementById("dia").add(opcion);
			}
			//alert("30");
		}
		else if(document.getElementById("mes").value==2 && ((document.getElementById("anyo").value%4==0 && document.getElementById("anyo").value%100!=0) || (document.getElementById("anyo").value%400==0))){
			for (var i=1; i<=29 ; i++) {
				var opcion = document.createElement("option");
				opcion.text = i;
				opcion.value = i;
				document.getElementById("dia").add(opcion);
			}
			//alert("29");
		}
		else if(document.getElementById("mes").value==2 && !((document.getElementById("anyo").value%4==0 && document.getElementById("anyo").value%100!=0) || (document.getElementById("anyo").value%400==0))){
			for (var i=1; i<=28 ; i++) {
				var opcion = document.createElement("option");
				opcion.text = i;
				opcion.value = i;
				document.getElementById("dia").add(opcion);
			}
			//alert("28");
		}
	}
	else{
		for (var i=1; i<=31 ; i++) {
			var opcion = document.createElement("option");
			opcion.text = i;
			opcion.value = i;
			document.getElementById("dia").add(opcion);
		}
		//alert("Default");
	}
}

function seguro(id){
    if (confirm('¿Estas seguro que quieres eleminar el siguiente registro?')) {
    
    alert("Elemento eliminado");
        /*window.location.href=="eliminar_coder.php?eli=id";*/
    } else {
    alert("Accion cancelada");
        event.preventDefault();
    /*window.location.href == "coders.php";*/
    
}
        
}

dias();
