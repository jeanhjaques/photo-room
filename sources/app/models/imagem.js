
function abrirImagem( a,  b) {

    // document.getElementById('modalImagem').style.display = 'block';

    
    var modal = document.getElementById('modalImagem');
    modal.style.display = 'block';
    


    var modalImg = document.getElementById("imgAparece");
    var captionText = document.getElementById("caption");
    var img = document.getElementById(this);
    
    modalImg.src = a;
    captionText.innerHTML = b;
   
    // Get the <span> element that closes the modal
    var span = document.getElementById("fecharImagem");
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
        modal.style.display = "none";
    }
}