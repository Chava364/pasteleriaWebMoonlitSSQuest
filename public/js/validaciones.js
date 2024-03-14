let nom, ed,ape,gen,email,pas;
window.onload =() =>{
    nom = document.getElementById("nombre").value;
    ed=document.getElementById("edad").value;
    ape=document.getElementById("apellido").value;
    gen=document.getElementById("genero").value;
    email=document.getElementById("email").value;
    pas=document.getElementById("contraseña").value;
}

function validar(){

    let nom, ed,ape,gen,email,pas;

    nom = document.getElementById("nombre").value;
    ed=document.getElementById("edad").value;
    ape=document.getElementById("apellido").value;
    gen=document.getElementById("genero").value;
    email=document.getElementById("email").value;
    pas=document.getElementById("contraseña").value;

    

    if(nom==""){
        alert("INGRESA NOMBRE")
        return false;
    }
    if (nom.length > 20) {
        alert("EL NOMBRE NO DEBE TENER MÁS DE 20 CARACTERES");
        return false;
    }else if (nom.length > 30 || nom.length < 2 || !/^[a-zA-Z]+$/.test(nom)) {
        alert("El nombre debe tener entre 2 y 30 caracteres y solo contener letras.");
        return false;
    }
    
    if(ape==""){
        alert("INGRESA APELLIDO")
        return false;
    }else if (ape.length > 30 || ape.length < 2 || !/^[a-zA-Z]+$/.test(ape)) {
        alert("El apellido debe tener entre 2 y 30 caracteres y solo contener letras.");
        return false;
    }
    
    if(ed==""){
        alert("INGRESA TU EDAD")
        return false;
    }
    if (isNaN(ed) || ed < 18 || ed > 99) {
        alert("INGRESA UNA EDAD VÁLIDA (entre 18 y 99 años)");
        return false;
    }
    
    
    if(gen==""){
        alert("INGRESA GENERO")
        return false;
    }

    var expresionR = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/;
    if (email === "") {
        alert("INGRESA UN CORREO ELECTRÓNICO");
        return false;
        } else if (!expresionR.test(email)) {
        alert("COLOCA UNA DIRECCION DE CORREO VALIDA");
        return false;
    }

    if(pas==""){
        alert("INGRESA CONTRSEÑA");
        return false;
    }

    if(pas.length < 8|| pas.length > 12) {
        alert("La contraseña debe tener entre 8 y 12 caracteres");
        return false;
        }else if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]+$/.test(pas)) {
            alert("La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial(!@#$%^&*).");
            return false;

    }

}
