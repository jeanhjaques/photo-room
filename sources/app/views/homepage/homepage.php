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
    <title>Photo Room</title>
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
    <!-- Bloco que inclui a barra de pesquisa
    <div class="espacobusca">
        <form method="post" action="../controllers/loginController.php">
            <label for="pesquisa"></label>
            <input id="pesquisa" name="pesquisa" required="required" type="search" placeholder="Pesquisar">
            <button class="btnPesquisa" type="submit"></button>
        </form>
    </div>
    -->
    <!-- Adicionar imagem ao album como um modal -->
    <div class="CadastrarImagem modal" >
        <div class="modal-content">
            <span class="close" onclick="fecharModelAlbum()" >&times;</span>
            <span class="textoMidia">Selecione o Album para colocar uma mídia</span>
            <?php
            $albunsUsuario = AlbumController::buscarAlbuns();
            ?> 
            <ul class="exibicaoAlbum"> 
                <?php
            foreach ($albunsUsuario as $album) {
                echo "<li>
                <button onclick=\"abrirAlbum(" . $album['idalbum'] . ")\"> 
                    <img src=\"public/img/album.png\"  height=\"80\"  width=\"80\" > 
                    <div> ". $album['nomealbum'] . "</div>
                </button>
                </li>";
            }
            echo "</ul>";
            ?>
            
        </div>
    </div>


    <div class="fotosAlbum modal" >
        <div class="modal-content">
            <span class="close" onclick="fecharModelAlbum()">&times;</span>
            <span class="textoMidia">Faça o Upload da mídia</span>
            <form action="index.php?action=cadastrarimagemalbumpadrao" method="post"
            enctype="multipart/form-data">
                <input class="nova-imagem" id="nova-imagem" name="nova-imagem" required="required" type="file"
                accept=".jpg,.png,.mp4,.mkv,.avi" placeholder="Selecionar Imagem"><br>
                <button id="btnupload" onclick="exibirAddImagem()">Cancelar</button>
                <input type="submit" value="Enviar" id="btnupload">
            </form>
        </div>
    </div>

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

    <div class="divformAdicionarImagemEmAlgumAlbum">
        <h1>Escolha um Álbum</h1>
        <form class="formAdicionarImagemEmAlbum" action="index.php?action=addmidiaemalbum" method="post">
            <?php
            $albunsUsuario = AlbumController::buscarAlbuns();
            foreach ($albunsUsuario as $album) {
                echo "<input type=\"radio\" id=\"idAlbum\" name=\"idAlbum\" value=\"".$album['idalbum']."\">".$album['nomealbum']."";
            }
            ?>
            <br>
            <button id="btnupload" onclick="ocultarMenuSelecaoAlbum()">Cancelar</button>
            <input type="submit" value="Adicionar" id="btnupload">
        </form>
    </div>

    <div class="divSeletorImgOrVideo">
        <button class="seletorImgOrVideo" onclick="mudarCorButtonsMenuBorder('seletorImgOrVideo',0); exibirImagemOrVideo(0)"><img class="img-icone" id="imgorvideo" src="public/icones/imagem.png" alt="Imagens"></button><br>
        <button class="seletorImgOrVideo" onclick="mudarCorButtonsMenuBorder('seletorImgOrVideo',1); exibirImagemOrVideo(1)"><img class="img-icone" id="imgorvideo" src="public/icones/video.png" alt="Videos"></button><br>
        <button class="seletorImgOrVideo" onclick="exibirAddImagem()"><img class="img-icone"  id="imgorvideo" src="public/icones/addImagem.png" alt="Imagens"></button>
    </div>

    <script>
        mudarCorButtonsMenuBorder('seletorImgOrVideo', 0);
    </script>

    <!-- Bloco onde fica o albúm do usuário -->
    <?php
    $albunsUsuario = AlbumController::buscarAlbuns();
    $posicao = 0;
    foreach ($albunsUsuario as $album) {
        $autor = AlbumController::buscaDono($album['usuario_idusuario']);
        echo "<div class=\"Albuns\">";
        echo "<div class=\"divDescricao\"><span class=\"Descricao\"> <span class='textoDescricao'>" . $album['descricao'] . "</span><img onclick=\"exbirCompartilharAlbum('" . $album['codCompartilhamento'] . "');\" class=\"imgBtnCompartilhar\"  src=\"public/icones/compartilhar.png\" alt=\"Compartilhar\"></span> Autor: $autor</div>";
        echo "<div class=\"imagens\">";
        echo "<div class=\"caixadeimagens\">";
        $imagens = MidiaController::buscarImagens($album['idalbum']);
        $videos = MidiaController::buscarVideos($album['idalbum']);

        /* Caso existirem imagens buscar e exibir-->*/
        echo  "<div class=\"Imagensdoalbum\">";
        if ($imagens == null) {
            echo "<h1>Álbum não possui imagens</h1>";
            $imagens = false;
        }
            if ($imagens != false) {
                foreach ($imagens as $imagem) {
                    echo "<figure class=\"imagensdoalbum\" onclick=\"aparecerMenuContexto('" . $posicao . "');\">
                                                <img class=\"img-album\" src=\"public/upload/" . $imagem['enderecoArquivo'] . "\"alt=\"" . $imagem['enderecoArquivo'] . "\">
                                                <figcaption class=\"texto\">
                                                    <a onclick=\"expandirImagem('" . $imagem['enderecoArquivo'] . "');\"\"><img class=\"img-icone\" src=\"public/icones/expandir.png\" alt=\"Expandir\"></a>Expandir<br>
                                                    <a href=\"index.php?action=favoritar&MidiaId=" . $imagem['idmidia'] . "\"><img class=\"img-icone\" src=\"public/icones/favorito.png\" alt=\"favoritar\"></a>Favorito<br>
                                                    <a onclick=\"adicionarImagemParaAlbum('" . $imagem['idmidia'] . "')\" ><img class=\"img-icone\" src=\"public/icones/add.png\" alt=\"Adcionar para Álbum\"></a>Álbum<br>
                                                    <a href=\"\"><img class=\"img-icone\" src=\"public/icones/detalhes.png\" alt=\"Ver detalhes\"></a>Detalhes<br>
                                                    <a href=\"index.php?action=deletarimagem&MidiaId=" . $imagem['idmidia'] . "&AlbumId=" . $album['idalbum'] . "\"><img class=\"img-icone\" src=\"public/icones/excluir.png\" alt=\"Deletar\"></a>Deletar<br>
                                                    
                                                </figcaption>
                                            </figure>";
                    $posicao++;
                }
            }
        echo "</div>";
            echo  "<div class=\"Videosdoalbum\">";
        if($videos == null){
            echo "<h1>Álbum não possui videos</h1>";
            $videos = false;
        }
            if ($videos != false) {
                    foreach ($videos as $imagem) {
                        echo "<figure class=\"imagensdoalbum\" onclick=\"aparecerMenuContexto('" . $posicao . "');\">
                                <video class=\"img-album\"  width=\"320\" height=\"240\" controls>
				                <source src=\"public/upload/" . $imagem['enderecoArquivo'] . "\"alt=\"" . $imagem['enderecoArquivo'] . "\">
			                </video>
                                                        <figcaption class=\"texto\">
                                                            <a onclick=\"expandirVideo('" . $imagem['enderecoArquivo'] . "');\"\"><img class=\"img-icone\" src=\"public/icones/expandir.png\" alt=\"Expandir\"></a>Expandir<br>
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
        echo "</div>";
    }
    ?>
    <script>
        exibirAlbum("Albuns", 0);
    </script>

    <div class="Albuns">
        <form class="formAlbumComCodigo" id="formAlbumComCodigo" action="index.php?action=addalbumcomcodigo" method="post">
            <label for="codigocomp_album"></label>
            <input id="codigocomp_album" name="codigocomp_album" required="required" type="text" placeholder="Inserir com código">
            <input type="submit" value="Validar Código">
        </form>

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