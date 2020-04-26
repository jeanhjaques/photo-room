
function abrirImagem() {

    document.getElementById('modalImagem').style.display = 'block';

    
    
    var modalImg = document.getElementById("imgAparece");
    var captionText = document.getElementById("caption");

    var img = document.getElementsByTagName('img');

    
    img.onclick = function() {
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
    
    // Get the <span> element that closes the modal
    var modal = document.getElementById('modalImagem');
    var span = document.getElementById("fecharImagem");
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
        modal.style.display = "none";
    }
}