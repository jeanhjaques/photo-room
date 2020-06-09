<?php 
    // Exibe todos os erros PHP (see changelog)
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="app/views/homepage/homepage.css" rel="stylesheet">
    <link rel="stylesheet" href="app/views/homepage/img.css">
    <script src="app/views/homepage/scripts.js"></script>
    <script src="app/views/homepage/imagem.js"></script>
</head>

<body>
<header>
    <?php
        require 'app/views/header.php';
    ?>
</header>
<article>
    <!-- Bloco que inclui a barra de pesquisa -->
    <div class="espacobusca">
        <form method="post" action="../controllers/loginController.php">
            <label for="pesquisa"></label>
            <input id="pesquisa" name="pesquisa" required="required" type="search" placeholder="Pesquisar">
        </form>
    </div>

    <!-- Menu Principal da página -->
    <nav class="menuprincipal">
        <ul>
            <li><img class="imgmenuprincipal" src="public/img/tudo.png"></li>
            <li><img class="imgmenuprincipal" src="public/img/favorito.png"></li>
            <li><img class="imgmenuprincipal" src="public/img/mais.png" onclick="createAlbum()"></li>
        </ul>
    </nav>
    <h1> Página meramente ilustrativa, sem conexão alguma com o usuario que logou</h1>

    <!-- Bloco onde fica o albúm do usuário -->
    <div class="imagens">
        <nav class="caixadeimagens">
            <ul>
                <li><img onclick="abrirImagem('public/img/foto0.jpg', 'foto0');" id="a" class="imgcx img" src="public/img/foto0.jpg" alt="foto0"></li>
                <li><img onclick="abrirImagem('public/img/foto1.jpg' , 'foto1');" class="imgcx img" src="public/img/foto1.jpg" alt="foto1"></li>
                <li><img onclick="abrirImagem('public/img/foto2.jpg', 'foto2');" class="imgcx img" src="public/img/foto2.jpg" alt="foto2"></li>
                <li><img onclick="abrirImagem('public/img/foto3.jpg', 'foto3');" class="imgcx img" src="public/img/foto3.jpg" alt="foto3"></li>
                <li><img onclick="abrirImagem('public/img/foto4.jpg', 'foto4');" class="imgcx img" src="public/img/foto4.jpg" alt="foto4"></li>
                <li><img onclick="abrirImagem('public/img/foto5.jpg', 'foto5');" class="imgcx img" src="public/img/foto5.jpg" alt="foto5"></li>
                <li><img onclick="abrirImagem('public/img/foto6.jpg', 'foto6');" class="imgcx img" src="public/img/foto6.jpg" alt="foto6"></li>
                <li><img onclick="abrirImagem('public/img/foto7.jpg', 'foto 7');" class="imgcx img" src="public/img/foto7.jpg" alt="foto7"></li>

            </ul>
        </nav>
    </div>
    <!-- modal Imagem -->
    <div id="modalImagem" class="modalimg">
        <span class="close" id="fecharImagem">&times;</span>
        <img id="imgAparece" class="modal-content-img">
        <div id="caption"></div>
    </div>
</article>
<footer>
    <?php
        require 'app/views/footer.html';
    ?>
</footer>
</body>
</html>
