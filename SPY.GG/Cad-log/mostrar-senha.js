function mostrar(){
    var senha = document.getElementById("senha");
    if (senha.type == "password") {
        senha.type = "text";
        image.src = "olho-fechado-branco.svg";
    }else{
        if (senha.type == "text") {
            senha.type = "password";
            image.src = "olho-branco.svg";
        }
    }
}
function mostrarConfirme(){
    var senha = document.getElementById("confirmar");
    if (senha.type == "password") {
        senha.type = "text";
        image.src = "olho-fechado-branco.svg";
    }else{
        if (senha.type == "text") {
            senha.type = "password";
            image.src = "olho-branco.svg";
        }
    }
}