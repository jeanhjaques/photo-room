<?php
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app/views/perfil/perfil.css">
    <script src="app/views/perfil/SelecionaImg.js" type="text/javascript"></script> 
</head>
<body>
    <header>
        <?php
            require 'app/views/header.php';
        ?>
    </header>
    <article>
        <div class="titulo">
            <h1>Informações do perfil</h1>
        </div>
        <!-- Imagem de perfil do usuário -->
        <figure class="figure-perfil">
            <?php echo "<img class = \"img-perfil\" src=\"public/upload/".$_SESSION['usuarioLogado']['endfotoperfil']."\">"?>
        </figure>

        <a  href="index.php?action=editarperfil"><button id="btnEditar">Editar</button></a>

        <!-- Informações do perfil do usuário -->
        <div class="dados">
            <div>
                <label for="nome">Nome: </label>
                <span> <?php echo $_SESSION['usuarioLogado']['nome']?> <?php echo $_SESSION['usuarioLogado']['sobrenome']?></span>
            </div>
            <div>
                <label for="email">Email: </label>
                <span><?php echo $_SESSION['usuarioLogado']['email']?></span>
            </div>
            <div>
                <label for="pais">País: </label>
                <span><?php echo $_SESSION['usuarioLogado']['pais']?></span>
            </div>
            <div>
                <label for="conta">Código Conta: </label>
                <span><?php echo $_SESSION['usuarioLogado']['idusuario']?></span>
            </div>
            <div>
                <label for="cidade">Cidade: </label>
                <span><?php echo $_SESSION['usuarioLogado']['cidade']?></span>
            </div>
            <div>
                <label for="telefone">Telefone: </label>
                <span><?php echo $_SESSION['usuarioLogado']['telefone']?></span>
            </div>
        </div>
    </article>
    <br>
    <footer>
        <?php
            require 'app/views/footer.html';
        ?>
    </footer>
</body>
</html>
