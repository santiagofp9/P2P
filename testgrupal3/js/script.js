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
	var patron = /^([A-ZÑÁÉÍÓÚ]|[a-zñáéíóú]+[\s]*)+$/;
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
	var patron = /^[0-9]{7,8}[A-Z]$/;
	enviar = false;
	if(document.getElementById("dni").value==null || document.getElementById("dni").value=="" || !patron.test(document.getElementById("dni").value)){
		enviar = false;
		document.getElementById("dniInfo").innerHTML = " Error: DNI no valido";
	}
	else{
		enviar = true;
		document.getElementById("dniInfo").innerHTML = "";
	}
	return enviar;
}

function validarCoder(){
	enviar = false;
	if(validarNombreApellido("nombre")){
		enviar = true;
	}
	if(validarNombreApellido("apellido")){
		enviar = true;
	}
	if(validarDNI()){
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
	enviar = false;
	if(document.getElementById("nombre").value==null || document.getElementById("nombre").value==""){
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
		for (var i=document.getElementById("dia").length -1; i>=0 ; i--) { /*revisar sentencias*/
			document.getElementById("dia").remove(i);
		}
	}
	if(document.getElementById("mes").value!=null && document.getElementById("anyo").value!=null){
		if((document.getElementById("mes").value>=1 && document.getElementById("mes").value<=7 && document.getElementById("mes").value%2!=0) || (document.getElementById("mes").value>=8 && document.getElementById("mes").value<=12 && document.getElementById("mes").value%2==0)){
			for (var i=1; i<=31 ; i++) {
				var opcion = document.createElement("option");
				opcion.text = i;
				opcion.value = "<?php echo "+i+"; ?>";
				document.getElementById("dia").add(opcion);
			}
		}
		else if(document.getElementById("mes").value==4 || document.getElementById("mes").value==6 || document.getElementById("mes").value==9 || document.getElementById("mes").value==11){
			for (var i=1; i<=30 ; i++) {
				var opcion = document.createElement("option");
				opcion.text = i;
				opcion.value = "<?php echo "+i+"; ?>";
				document.getElementById("dia").add(opcion);
			}
		}
		else if(document.getElementById("mes").value==2 && ((document.getElementById("anyo").value%4==0) && ((document.getElementById("anyo").value%100!=0) || (document.getElementById("anyo").value%400==0)))){
			for (var i=1; i<=29 ; i++) {
				var opcion = document.createElement("option");
				opcion.text = i;
				opcion.value = "<?php echo "+i+"; ?>";
				document.getElementById("dia").add(opcion);
			}
		}
		else if(document.getElementById("mes").value==2 && !((document.getElementById("anyo").value%4==0) && ((document.getElementById("anyo").value%100!=0) || (document.getElementById("anyo").value%400==0)))){
			for (var i=1; i<=28 ; i++) {
				var opcion = document.createElement("option");
				opcion.text = i;
				opcion.value = "<?php echo "+i+"; ?>";
				document.getElementById("dia").add(opcion);
			}
		}
	}
	else{
		for (var i=1; i<=31 ; i++) {
			var opcion = document.createElement("option");
			opcion.text = i;
			opcion.value = "<?php echo "+i+"; ?>";
			document.getElementById("dia").add(opcion);
		}
	}
}



dias();