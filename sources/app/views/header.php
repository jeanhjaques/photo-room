<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="public/css/header.css" rel="stylesheet">
    </head>
    <body>
    <header>
        <p class="nomeUsuario"><strong><?php echo $_SESSION['usuarioLogado']['nome']." ".$_SESSION['usuarioLogado']['sobrenome'];?></strong></p>
        <nav>
        <!-- Menu de cabeçalho -->
            <ul class="menu"> <!-- Esse é o 1 nivel ou o nivel principal -->
            <li><a class="btnComIcone"><?php echo "<img class = \"icone\" src=\"public/upload/".$_SESSION['usuarioLogado']['endfotoperfil']."\">"?></a>
                <ul class="submenu-1"> <!-- Esse é o 2 nivel ou o primeiro Drop Down -->
                    <li><a href="index.php?action=paginadeusuario">Seu Álbum de Fotos</a></li>
                    <li><a href="index.php?action=perfil">Perfil</a></li>
                    <li><a href="index.php?action=dashboard">Dashboard</a></li>
                    <li><a href="index.php?action=login">Sair</a></li>
                    </li>
                </ul>
            </li>
        </ul>
        </nav>

    </header>
    </body>
</html>