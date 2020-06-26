//Confirma se o usuario deseja mesmo deletar a conta
function validarExclusao() {
    var values = document.getElementsByClassName('ConfirmExclusaoConta');

    if(values[0].style.display == "block"){
        values[0].style.display = "none";
    }
    else{
        values[0].style.display = "block";
    }
}