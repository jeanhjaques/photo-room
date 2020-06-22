/**
 * Escuta se acionou o evento change para mostrar o nome do arquivo.
 */
document.addEventListener("DOMContentLoaded", function() {

    document.getElementById("nova-imagem").addEventListener("change", function() {
        mostrarNomeArq();
    }, false);

}, false);

/* Função que muda a visualização dependendo da opção escolhida pelo usuário*/
function exibirAlbum(classeExibir, numButtom) {
    var classValues = document.getElementsByClassName(classeExibir);
    for (var i = 0; i < classValues.length; i++) {
        if (i == numButtom) {
            classValues[i].style.display = "block";
        } else {
            classValues[i].style.display = "none";
        }
    }
}

function exibirAddImagem(){
    var values = document.getElementsByClassName('CadastrarImagem');
    var valorAtual = values[0].style.display;
    if(valorAtual == "block"){
        values[0].style.display = "none";
    }
    else{
        values[0].style.display = "block";
    }
}

function exibirImagemOrVideo(numButtom) {
    var imagens = document.getElementsByClassName('Imagensdoalbum');
    var videos = document.getElementsByClassName('Videosdoalbum');
        if (numButtom == 0) {
            for (var i = 0; i < imagens.length; i++) {
                imagens[i].style.display = "block";
            }
            for (var i = 0; i < videos.length; i++) {
                videos[i].style.display = "none";
            }
        }
        else {
            for (var i = 0; i < imagens.length; i++) {
                imagens[i].style.display = "none";
            }
            for (var i = 0; i < videos.length; i++) {
                videos[i].style.display = "block";
            }
        }
}


/* Função que altera a cor dos botões dependendo o botão que foi clicado colocando fundo*/
function mudarCorButtonsMenu(classOfButtons, numButtom) {
    var colorValue = document.getElementsByClassName(classOfButtons);
    for (var i = 0; i < colorValue.length; i++) {
        if (i == numButtom) {
            colorValue[i].style.background = "#ff00b7";
        } else {
            colorValue[i].style.background = "black";
        }
    }
}
/* Função que altera a cor dos botões dependendo o botão que foi clicado colocando borda*/
function mudarCorButtonsMenuBorder(classOfButtons, numButtom) {
    var colorValue = document.getElementsByClassName(classOfButtons);
    for (var i = 0; i < colorValue.length; i++) {
        if (i == numButtom) {
            colorValue[i].style.borderColor = "#ff00b7";
        } else {
            colorValue[i].style.borderColor = "black";
        }
    }
}
function blueFirst(classOfButtons, numButtom){
    var colorValue = document.getElementsByClassName(classOfButtons);
    var i = 0;
    colorValue[i].style.background = "#ff00b7";
}

function mostrarNomeArq() {
    document.getElementById("spupload").innerHTML = "";
    var nomeArquivo = document.getElementById("nova-imagem").value;
    document.getElementById("spupload").innerHTML = nomeArquivo;
}

//responsável pelo menu de contexto
function aparecerMenuContexto(ClassNumber){
    var values = document.getElementsByClassName("texto");
    for (var i = 0; i < values.length; i++) {
        if (i != ClassNumber) {
            values[i].style.display = "none";
        } else {
            values[i].style.display = "block";
        }
    }
}

function desapareceContextoClicandoFora() {
    var values = document.getElementsByClassName("texto");
    for (var i = 0; i < values.length; i++) {
            values[i].style.display = "none";
    }
}