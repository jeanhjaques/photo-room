<?php 
    // Exibe todos os erros PHP (see changelog)
    error_reporting(E_ALL);
    require_once 'app/controllers/MidiaController.php';
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
    <br>
    <form id="formCadastrarImagemAlbumPadrao" action="index.php?action=cadastrarimagemalbumpadrao" method="post" enctype="multipart/form-data">
        <label for="nova-imagem"></label>
        <input class ="nova-imagem" id="nova-imagem" name="nova-imagem" required="required"
               type="file" accept=".jpg,.png" placeholder="Selecionar Imagem"><br>
        <input type="submit" value="Salvar Imagem"><br>
    </form>

    <!--busca os arquivos e determina true e false se contém itens-->
    <?php
    $imagens = MidiaController::buscarImagens($_SESSION['usuarioLogado']['idalbumprincipal']);
    $_SESSION['imagensemprincipal'] = true;
    if($imagens == null){
        echo "<h1> Álbum Vazio</h1>";
        $_SESSION['imagensemprincipal'] = false;
    }
    ?>

    <!-- Bloco onde fica o albúm do usuário -->
    <div class="imagens">
        <nav class="caixadeimagens">
            <ul>
                <?php
                    if($_SESSION['imagensemprincipal'] != false){
                        foreach ($imagens as $imagem) {
                            echo "<li><img onclick=\"abrirImagem('public/upload/" . $imagem['enderecoArquivo'] . "', '" . $imagem['enderecoArquivo'] . "');\" id=\"a\" class=\"imgcx img\" src=\"public/upload/" . $imagem['enderecoArquivo'] . "\"alt=\"" . $imagem['enderecoArquivo'] . "\"></li>";
                        }
                    }
                ?>
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
