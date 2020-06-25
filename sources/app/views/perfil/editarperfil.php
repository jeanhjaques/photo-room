<?php
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
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
            <h1>Editar do perfil</h1>
            <hr>
        </div>
        <!-- Imagem de perfil do usuário -->
        <figure class="figure-perfil">
            <?php echo "<img class = \"img-perfil\" src=\"public/upload/".$_SESSION['usuarioLogado']['endfotoperfil']."\">"?>
        </figure>
        
        <form id="formImagemPerfil" action="index.php?action=atualizarusuario" method="post" enctype="multipart/form-data">
            <div class="dados">
                <div class="divSelecionaImg">
                    <span id="spResultado"> 
                        &nbsp;
                        <?php echo $_SESSION['usuarioLogado']['endfotoperfil']; ?>
                    </span>
                    <input type="button" name="btnSelecionar" id="btnSelecionar" value="Selecionar"/>
                </div>         

                <input value="<?php echo $_SESSION['usuarioLogado']['endfotoperfil']; ?>" class ="formInput" id="imagem-perfil" name="imagem-perfil"  type="file" accept=".jpg,.png" ><br>

            
                <div>
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="" value="<?php echo $_SESSION['usuarioLogado']['nome']?>">
                </div>
                <div>
                    <label for="nome">Sobrenome: </label>
                    <input type="text" name="sobrenome" id="" value="<?php echo $_SESSION['usuarioLogado']['sobrenome']?>">
                </div>
                <div>
                    <label for="email">Email: </label>
                    <input type="text" name="email" id="" disabled value="<?php echo $_SESSION['usuarioLogado']['email']?>">
                </div>
                <div>
                    <label for="pais">País: </label>
                    <input type="text" name="pais" id="" value="<?php echo $_SESSION['usuarioLogado']['pais']?>">
                </div>
                <div>
                    <label for="cidade">Cidade: </label>
                    <input type="text" name="cidade" id="" value="<?php echo $_SESSION['usuarioLogado']['cidade']?>">
                </div>
                <div>
                    <label for="telefone">Telefone: </label>
                    <input type="text" name="telefone" id="" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);"  maxlength="15" value="<?php echo $_SESSION['usuarioLogado']['telefone']?>">
                </div>
            </div>
            <br>

            <input id="btnAtualizar" type="submit" value="Atualizar Perfil"><br>
        </form>        
                
    </article>
    <br>
    <footer>
        <?php
            require 'app/views/footer.html';
        ?>
    </footer>
</body>
</html>
