/**
 * /*Faz o botão btnSelecionar simular o click no input do type file, pois esse está oculto.
 */
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("btnSelecionar").addEventListener("click", function() {
        simularClick();
    }, false);

    document.getElementById("imagem-perfil").addEventListener("change", function() {
        atribuirNome();
    }, false);

}, false);


/*simula o click no input do type file*/
function simularClick() {
    document.getElementById("imagem-perfil").click();
}

function atribuirNome() {
    var nome = document.getElementById("imagem-perfil").value;
    document.getElementById("spResultado").innerHTML = nome;
}