document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("imagem-perfil").addEventListener("change", function() {
        atribuirNome();
    }, false);

}, false);

function dateMask(inputData, e) {
    if (document.all) // Internet Explorer
        var tecla = event.keyCode;
    else //Outros Browsers
        var tecla = e.which;

    if (tecla >= 47 && tecla < 58) { // numeros de 0 a 9 e "/"
        var data = inputData.value;
        if (data.length == 2 || data.length == 5) {
            data += '/';
            inputData.value = data;
        }
    } else if (tecla == 8 || tecla == 0) // Backspace, Delete e setas direcionais(para mover o cursor, apenas para FF)
        return true;
    else
        return false;
}

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