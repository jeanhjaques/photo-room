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

/*Mascara do campo telefone*/
function mask(o, f) {
  setTimeout(function() {
    var v = mphone(o.value);
    if (v != o.value) {
      o.value = v;
    }
  }, 1);
}

function mphone(v) {
  var r = v.replace(/\D/g, "");
  r = r.replace(/^0/, "");
  if (r.length > 10) {
    r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
  } else if (r.length > 5) {
    r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
  } else if (r.length > 2) {
    r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
  } else {
    r = r.replace(/^(\d*)/, "($1");
  }
  return r;
}