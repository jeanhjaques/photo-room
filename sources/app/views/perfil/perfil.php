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
            <hr>
        </div>
        <!-- Imagem de perfil do usuário -->
        <figure class="figure-perfil">
            <?php echo "<img class = \"img-perfil\" src=\"public/upload/".$_SESSION['usuarioLogado']['endfotoperfil']."\">"?>
        </figure>
        <form id="formImagemPerfil" action="index.php?action=atualizarusuario" method="post" enctype="multipart/form-data">
            <label for="imagem-perfil"></label>
            <input class ="imagem-perfil" id="imagem-perfil" name="imagem-perfil" required="required"
                   type="file" accept=".jpg,.png" placeholder="Selecionar Imagem"><br>
            <input type="submit" value="Atualizar Imagem"><br>
        </form>
        <!-- Informações do perfil do usuário -->
        <div class="dados">
            <div>
                <label for="nome">Nome: </label>
                <span> <?php echo $_SESSION['usuarioLogado']['nome']?></span>
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
                <span>Não Cadastrado ainda</span>
            </div>
        </div>
    </article>
    <br>
    <footer>
        <?php
            require 'app/views/footer.php';
        ?>
    </footer>
</body>
</html>
