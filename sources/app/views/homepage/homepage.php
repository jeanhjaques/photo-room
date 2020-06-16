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
    <script src="app/views/homepage/homepage.js"></script>
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
            <button class="btnPesquisa" type="submit"></button>
        </form>
    </div>

    <!-- Menu Principal da página
    <nav class="menuprincipal">
        <ul>
            <li><button class="menu-principal" id="btnpadrao" onclick="mudarCorButtonsMenu('menu-principal',0); exibirAlbum(0,'Albuns')" ><img class="imgmenuprincipal" src="public/img/tudo.png"></button></li>
            <li><button class="menu-principal" onclick="mudarCorButtonsMenu('menu-principal',1); exibirAlbum(1,'Albuns')" ><img class="imgmenuprincipal" src="public/img/favorito.png"></button></li>
            <li><button class="menu-principal" onclick="mudarCorButtonsMenu('menu-principal',2); exibirAlbum(2,'Albuns')" ><img class="imgmenuprincipal" src="public/img/mais.png" onclick="createAlbum()"></button></li>
        </ul>
    </nav> -->
    <nav class="menuprincipal">
        <ul>
            <?php
            $albunsUsuario = AlbumController::buscarAlbuns();
            $iterator = 0;
            foreach ($albunsUsuario as $album) {
                echo "<li><button class='menu-principal' onclick=\"mudarCorButtonsMenu('menu-principal'," . $iterator . "); exibirAlbum('Albuns'," . $iterator . ");\" >" . $album['nomealbum'] . "</button></li>";
                $iterator++;
            }
            echo "<li><button class='menu-principal' onclick=\"mudarCorButtonsMenu('menu-principal'," . $iterator . "); exibirAlbum('Albuns'," . $iterator . ");\" >Adicionar Album</button></li>";
            ?>

            <script>
                blueFirst('menu-principal', 0);
            </script>
        </ul>
    </nav>

    <form id="formCadastrarImagemAlbumPadrao" action="index.php?action=cadastrarimagemalbumpadrao" method="post"
          enctype="multipart/form-data">
        <div class="divupload">
            <span id="spupload">Selecione pela câmera</span>
            <img src="public/img/camera32.png" alt="">
            <input class="nova-imagem" id="nova-imagem" name="nova-imagem" required="required" type="file"
                   accept=".jpg,.png" placeholder="Slecionar Imagem"><br>
            <input type="submit" value="Enviar" id="btnupload"><br>
        </div>
    </form>

    <!-- Bloco onde fica o albúm do usuário -->
    <?php
    $albunsUsuario = AlbumController::buscarAlbuns();
    $posicao = 0;
    foreach ($albunsUsuario as $album) {
        echo "<div class=\"Albuns\">";
        echo "<p><strong>Descrição: </strong>" . $album['descricao'] . "</p>";
        echo "<div class=\"imagens\">";
        echo "<div class=\"caixadeimagens\">";
        $imagens = MidiaController::buscarImagens($album['idalbum']);
        if ($imagens == null) {
            echo "<h1>Álbum Vazio</h1>";
            $imagens = false;
        }

        if ($imagens != false) {
            foreach ($imagens as $imagem) {
                echo "<figure class=\"imagensdoalbum\" onclick=\"aparecerMenuContexto('" . $posicao . "');\">
                                            <img class=\"img-album\" src=\"public/upload/" . $imagem['enderecoArquivo'] . "\"alt=\"" . $imagem['enderecoArquivo'] . "\">
                                            <br>
                                            <figcaption class=\"texto\">
                                                <a onclick=\"abrirImagem('public/upload/" . $imagem['enderecoArquivo'] . "', '" . $imagem['enderecoArquivo'] . "');\"><img class=\"img-icone\" src=\"public/icones/expandir.png\" alt=\"Expandir\"></a>Expandir<br>
                                                <a href=\"index.php?action=favoritar&MidiaId=" . $imagem['idmidia'] . "\"><img class=\"img-icone\" src=\"public/icones/favorito.png\" alt=\"favoritar\"></a>Favorito<br>
                                                <a href=\"\"><img class=\"img-icone\" src=\"public/icones/add.png\" alt=\"Adcionar para Álbum\"></a>Álbum<br>
                                                <a href=\"\"><img class=\"img-icone\" src=\"public/icones/detalhes.png\" alt=\"Ver detalhes\"></a>Detalhes<br>
                                                <a href=\"index.php?action=deletarimagem&MidiaId=" . $imagem['idmidia'] . "&AlbumId=" . $album['idalbum'] . "\"><img class=\"img-icone\" src=\"public/icones/excluir.png\" alt=\"Deletar\"></a>Deletar<br>
                                                
                                            </figcaption>
                                        </figure>";
                $posicao++;
            }
        }
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
    <script>
        exibirAlbum("Albuns", 0);
    </script>

    <div class="Albuns">
        <form class="formCadastrarAlbum" id="formCadastrarAlbum" action="index.php?action=criaralbum" method="post">
            <?php
            if (isset($_SESSION['cadastroAlbumErro'])) {
                echo $_SESSION['cadastroAlbumErroErro'];
                unset($_SESSION['cadastroAlbumErro']);
            }
            ?>
            <br>

            <label for="nome_album"></label>
            <input id="nome_album" name="nome_album" required="required" type="text" placeholder="Nome do Álbum">
            <br>
            <label for="descricao_album"></label>
            <textarea placeholder="Descrição do Álbum" id="descricao_album" name="descricao_album"></textarea>
            <br>
            <input type="submit" value="Cadastrar Álbum">
        </form>
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