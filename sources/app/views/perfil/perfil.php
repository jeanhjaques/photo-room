<?php
    session_start();
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
    <?php
        include ('app/views/hearder.php');
    ?>

    <article>
        <div class="titulo">
            <h1>Informações do perfil</h1>
            <hr>
        </div>
        <!-- Imagem de perfil do usuário -->
        <figure>
            <img class="imagemPerfil" src="../../../public/img/imgperfil.jpg" alt="imgperfil">
        </figure>
        <!-- Informações do perfil do usuário -->
        <div class="dados">
            <div>
                <label for="nome">Nome: </label>
                <span> Suellen Rosemberg dos Santos</span>
            </div>
            <div>
                <label for="email">Email: </label>
                <span> suellenrosemberg10@gmail.com</span>
            </div>
            <div>
                <label for="pais">País: </label>
                <span>Brasil</span>
            </div>
            <div>
                <label for="conta">Códico Conta: </label>
                <span>XXXX</span>
            </div>
            <div>
                <label for="cidade">Cidade: </label>
                <span>Campo Grande - MS</span>
            </div>
            <div>
                <label for="telefone">Telefone: </label>
                <span>99 9999-9999</span>
            </div>
        </div>
    </article>
</body>
</html>
© 2020 GitHub, Inc.
