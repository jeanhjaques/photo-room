/* Função que muda a visualização dependendo da opção escolhida pelo usuário*/
function btnCriarConta(classeX){
    document.getElementsByClassName('box')[0].style.display = 'none';
    document.getElementsByClassName('box-criarConta')[0].style.display = 'block';
}

function btnLogin(){
    document.getElementsByClassName('box-criarConta')[0].style.display = 'none';
    document.getElementsByClassName('box-senha')[0].style.display = 'none';
    document.getElementsByClassName('box')[0].style.display = 'block';
}

function btnEsqueciSenha(){
    document.getElementsByClassName('box')[0].style.display = 'none';
    document.getElementsByClassName('box-senha')[0].style.display = 'block';
}