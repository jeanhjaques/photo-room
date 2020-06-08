<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="public/css/header.css" rel="stylesheet">
    </head>
    <body>
    <header>
        <!-- Menu de cabeçalho -->
        <nav class="menu">
            <ul>
                <li><a href="#"><?php echo $_SESSION['usuarioLogado']['nome']." ".$_SESSION['usuarioLogado']['sobrenome'];?></a></li>
                <li><img class="imgperfil" src="public/img/imgperfil.jpg"></li>
            </ul>
        </nav>
    </header>
    </body>
</html>