/**
 * Escuta se acionou o evento change para mostrar o nome do arquivo.
 */
document.addEventListener("DOMContentLoaded", function() {

    document.getElementById("nova-imagem").addEventListener("change", function() {
        mostrarNomeArq();
    }, false);

}, false);

/* Função que muda a visualização dependendo da opção escolhida pelo usuário*/
function exibirAlbum(numButtom, classeExibir) {
    var classValues = document.getElementsByClassName(classeExibir);
    for (var i = 0; i < classValues.length; i++) {
        if (i == numButtom) {
            classValues[i].style.display = "block";
        } else {
            classValues[i].style.display = "none";
        }
    }
}


/* Função que altera a cor dos botões dependendo o botão que foi clicado*/
function mudarCorButtonsMenu(classOfButtons, numButtom) {
    var colorValue = document.getElementsByClassName(classOfButtons);
    for (var i = 0; i < colorValue.length; i++) {
        if (i == numButtom) {
            colorValue[i].style.background = "#ff6b00";
        } else {
            colorValue[i].style.background = "white";
        }
    }
}

function mostrarNomeArq() {
    document.getElementById("spupload").innerHTML = "";
    var nomeArquivo = document.getElementById("nova-imagem").value;
    document.getElementById("spupload").innerHTML = nomeArquivo;
}