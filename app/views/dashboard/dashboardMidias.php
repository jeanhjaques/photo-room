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
    <a href="index.php?action=dashboardmidias" class="selecionado" >Mídias</a><br>
    <a href="index.php?action=dashboardalbunsusuarios"> Usuarios X Álbuns</a><br>
    <a href="index.php?action=dashboardmidiasalbuns"> Midias X Álbuns</a><br>
    <a href="index.php?action=paginadeusuario" >Voltar para a sua conta de usuário</a><br>
</nav>
<article>
    <div class="tabelas">
        <h1>Mídias Cadastradas</h1>
        <table>
            <tr class="tituloColuna">
                <td>ID Midia</td>
                <td>Data de Envio</td>
                <td>Nome do Arquivo</td>
                <td>Tamanho</td>
                <td>Extensão</td>
            </tr>
            <?php
            //puxa todos os dados do BD e exibe via foreach
            $dados = MidiaController::consultaTodosDadosMidia();
            foreach ($dados as $midia){
                if($midia['tamanho'] == null){
                    $midia['tamanho'] = "Não Registrado";
                }
                else{
                    $medida = " MB";
                    $midia['tamanho'] = $midia['tamanho'] . $medida;
                }
                echo "<tr>";
                echo "<td>".$midia['idmidia']."</td>
                      <td>".$midia['datadeenvio']."</td>
                      <td>".$midia['enderecoArquivo']."</td>
                      <td>".$midia['tamanho']."</td>
                      <td>".$midia['extensao']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</article>
</body>
</html>
