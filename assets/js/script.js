document.getElementById("btn_iniciar_sesion").addEventListener("click", Iniciarsesion);
document.getElementById("btn_registrarse").addEventListener("click", Register);
window.addEventListener("resize",anchopagina);
/*Declaración de variables*/
var contenedor_login_and_register = document.querySelector(".contener_login_and_register");
var formulario_login = document.querySelector(".formlogin");
var formulario_Register = document.querySelector(".formregister");
var caja_trasera_login = document.querySelector(".caja_login");
var caja_trasera_register = document.querySelector(".caja_Register");

function anchopagina(){
    if(window.innerWidth > 850){
        caja_trasera_login.style.display ="block";
        caja_trasera_register.style.display ="block";
    }else{
        caja_trasera_register.style.display ="block";
        caja_trasera_register.style,opacity ="1";
        caja_trasera_login.style.display ="none";
        formulario_login.style.display ="block";
        formulario_Register.style.display ="none";
        contenedor_login_and_register.style.left ="0px";
    }
}
anchopagina();

function Iniciarsesion(){
    if(window.innerWidth > 850){
    formulario_Register.style.display = "none";
    contenedor_login_and_register.style.left = "10px";
    formulario_login.style.display = "block";
    caja_trasera_register.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";
    }else{
        formulario_Register.style.display = "none";
        contenedor_login_and_register.style.left = "0px";
        formulario_login.style.display = "block";
        caja_trasera_register.style.opacity = "block";
        caja_trasera_login.style.opacity = "none";
    }
}
function Register(){
    if(window.innerWidth > 850){
     formulario_Register.style.display = "block";
     contenedor_login_and_register.style.left = "410px";
     formulario_login.style.display = "none";
     caja_trasera_register.style.opacity = "0";
     caja_trasera_login.style.opacity = "1";
    }else{
        formulario_Register.style.display = "block";
        contenedor_login_and_register.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }

}