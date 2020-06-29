<?php
error_reporting(E_ALL);
require_once 'app/controllers/MidiaController.php';
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
    <a href="index.php?action=dashboardalbuns">Álbuns</a><br>
    <a href="index.php?action=dashboardmidias" >Mídias</a><br>
    <a href="index.php?action=dashboardalbunsusuarios"> Usuarios X Álbuns</a><br>
    <a href="index.php?action=dashboardmidiasalbuns" class="selecionado"> Midias X Álbuns</a><br>
    <a href="index.php?action=paginadeusuario" >Voltar para a sua conta de usuário</a><br>
</nav>
<article>
    <div class="tabelas">
        <h1>Mídias X Álbuns</h1>
        <table>
            <tr class="tituloColuna">
                <td>ID Midia</td>
                <td>ID Album</td>
            </tr>
            <?php
            //puxa todos os dados do BD e exibe via foreach
            $dados = MidiaController::consultaTodosDadosMidiaAlbum();
            foreach ($dados as $midiaAlbum){
                echo "<tr>";
                echo "<td>".$midiaAlbum['idmidia']."</td>
                      <td>".$midiaAlbum['idalbum']."</td>";
                echo "</tr>";
            }


            ?>
        </table>
    </div>
</article>
</body>
</html>
