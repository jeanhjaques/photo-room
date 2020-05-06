<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
        <link href="homepage.css" rel="stylesheet">
        <link rel="stylesheet" href="../login/img.css">
        <script src="scripts.js"></script>
        <script src="imagem.js"></script>
    </heade>

    <body>
        <header>
                <!-- modal Imagem -->
                <div id="modalImagem" class="modalimg">
                    <span class="close" id="fecharImagem">&times;</span>
                    <img id="imgAparece" class="modal-content-img">
                    <div id="caption"></div>
                </div>

                <div id="modal-wrapper" class="modal">

                <form class="modal-content animate" action="/action_page.php">

                    <div class="createAlbumImgContainer">
                        <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Fechar">&times;</span>
                        <img src="../../../public/img/imgperfil.jpg" alt="Avatar" class="createAlbumAvatar">
                        <h1 style="text-align:center">Criar novo álbum</h1>
                    </div>

                    <div class="container">
                        <input class="createAlbumInput" type="text" placeholder="Nome do álbum" name="albumname">
                        <input class="createAlbumInput" type="text" placeholder="Descrição do álbum" name="albumdescription">        
                        <button class="createAlbumButton" type="submit">Criar</button>
                    </div>

                </form>

            </div>
            <div class="logo"></div>

            <!-- Menu de cabeçalho -->
            <nav class="menu">
                <ul>
                    <li><a href="#">Nome do Usuário</a></li>
                    <li><img class="imgperfil" src="../../../public/img/imgperfil.jpg"></li>
                </ul>
            </nav>

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
                    <li><img class="imgmenuprincipal" src="../../../public/img/tudo.png"></li>
                    <li><img class="imgmenuprincipal" src="../../../public/img/favorito.png"></li>
                    <li><img class="imgmenuprincipal" src="../../../public/img/mais.png" onclick="createAlbum()"></li>
                </ul>
            </nav>

            <!-- Bloco onde fica o albúm do usuário -->
            <div class="imagens">
                <nav class="caixadeimagens">
                    <ul>
                        <li><img onclick="abrirImagem('../../public/foto0.jpg', 'foto0');" id="a" class="imgcx img" src="../../../public/img/foto0.jpg" alt="foto0"></li>
                        <li><img onclick="abrirImagem('../../public/foto1.jpg' , 'foto1');" class="imgcx img" src="../../../public/img/foto1.jpg" alt="foto1"></li>
                        <li><img onclick="abrirImagem('../../public/foto2.jpg', 'foto2');" class="imgcx img" src="../../../public/img/foto2.jpg" alt="foto2"></li>
                        <li><img onclick="abrirImagem('../../public/foto3.jpg', 'foto3');" class="imgcx img" src="../../../public/img/foto3.jpg" alt="foto3"></li>
                        <li><img onclick="abrirImagem('../../public/foto4.jpg', 'foto4');" class="imgcx img" src="../../../public/img/foto4.jpg" alt="foto4"></li>
                        <li><img onclick="abrirImagem('../../public/foto5.jpg', 'foto5');" class="imgcx img" src="../../../public/img/foto5.jpg" alt="foto5"></li>
                        <li><img onclick="abrirImagem('../../public/foto6.jpg', 'foto6');" class="imgcx img" src="../../../public/img/foto6.jpg" alt="foto6"></li>
                        <li><img onclick="abrirImagem('../../public/foto7.jpg', 'foto 7');" class="imgcx img" src="../../../public/img/foto7.jpg" alt="foto7"></li>
                     
                    </ul>
                </nav>
            </div>
        </article>

        <footer>
            <!-- Espaço com informação dos DEVs -->
            <p>Desenvolvido por Fenix Group</p>
            <p>Copyright</p>
            <p>2020</p>
        </footer>

    </body>
</html>
