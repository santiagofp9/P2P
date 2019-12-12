/*para ingresar*/
function showregform(){
    document.title = "Sign up";
    document.querySelector(".auth").style.display = "none";
    document.querySelector(".reg").style.display = "flex";
}

/*para registrarse*/
function showauthform(){
    document.title = "Log in";
    document.querySelector(".auth").style.display = "flex";
    document.querySelector(".reg").style.display = "none";
    document.querySelector(".recpass").style.display = "none";
}

/*en caso olvidaste tu contraseña*/
function showrecoveryform(){
    document.title = "Password recovery";
    document.querySelector(".auth").style.display = "none";
    document.querySelector(".recpass").style.display = "flex";
}