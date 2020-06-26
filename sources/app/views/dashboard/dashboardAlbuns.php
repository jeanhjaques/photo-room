<?php
error_reporting(E_ALL);
require_once 'app/controllers/AlbumController.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Room Dashboard</title>
    <link rel="stylesheet" href="app/views/dashboard/dashboard.css">
</head>
<body>
<nav>
    <h2>Dashboard</h2><br>
    <a href="index.php?action=dashboard">Usuários</a><br>
    <a href="index.php?action=dashboardalbuns" class="selecionado" >Álbuns</a><br>
    <a href="index.php?action=dashboardmidias" >Mídias</a><br>
    <a href="index.php?action=dashboardalbunsusuarios"> Usuarios X Álbuns</a><br>
    <a href="index.php?action=dashboardmidiasalbuns"> Midias X Álbuns</a><br>
    <a href="index.php?action=paginadeusuario" >Voltar para a sua conta de usuário</a><br>
</nav>
<article>
    <div class="tabelas">
        <h1>Álbuns Cadastrados</h1>
        <table>
            <tr class="tituloColuna">
                <td>ID Álbum</td>
                <td>Nome do Álbum</td>
                <td>Data de Criação</td>
                <td>Código de Compartilhamento</td>
                <td>ID Dono</td>
                <td>Descrição</td>
            </tr>
            <?php
            //puxa todos os dados do BD e exibe via foreach
            $dados = AlbumController::consultaTodosAlbuns();
            foreach ($dados as $album){
                if($album['codCompartilhamento'] == null){
                    $album['codCompartilhamento'] = "Não Ativado";
                }
                echo "<tr>";
                echo "<td>".$album['idalbum']."</td>
                      <td>".$album['nomealbum']."</td>
                      <td>".$album['dataCriacao']."</td>
                      <td>".$album['codCompartilhamento']."</td>
                      <td>".$album['usuario_idusuario']."</td>
                      <td>".$album['descricao']."</td>";
                echo "</tr>";
            }


            ?>
        </table>
    </div>
</article>
</body>
</html>
