<?php
error_reporting(E_ALL);
require_once 'app/controllers/UsuarioController.php';
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
        <a href="index.php?action=dashboard" class="selecionado">Usuários</a><br>
        <a href="index.php?action=dashboardalbuns" >Álbuns</a><br>
        <a href="index.php?action=dashboardmidias" >Mídias</a><br>
        <a href="index.php?action=dashboardalbunsusuarios"> Usuarios X Álbuns</a><br>
        <a href="index.php?action=dashboardmidiasalbuns"> Midias X Álbuns</a><br>
        <a href="index.php?action=paginadeusuario" >Voltar para a sua conta de usuário</a><br>
    </nav>
    <article>
        <div class="tabelas">
            <h1>Usuarios Cadastrados</h1>
            <table>
                <tr class="tituloColuna">
                    <td>ID Usuário</td>
                    <td>Nome</td>
                    <td>Sobrenome</td>
                    <td>Email</td>
                    <td>Cidade</td>
                    <td>Estado</td>
                    <td>País</td>
                    <td>Telefone</td>
                    <td>Data de Nascimento</td>
                    <td>ID Álbum Padrão</td>
                    <td>ID Álbum de Favoritos</td>
                </tr>
                <?php
                    //puxa todos os dados do BD e exibe via foreach
                    $dados = UsuarioController::consultaTodosDados();
                    foreach ($dados as $usuario){
                        if($usuario['telefone'] == null){
                            $usuario['telefone'] = "Não Cadastrado";
                        }
                        echo "<tr>";
                        echo "  <td>".$usuario['idusuario']."</td>
                                <td>".$usuario['nome']."</td>
                                <td>".$usuario['sobrenome']."</td>
                                <td>".$usuario['email']."</td>
                                <td>".$usuario['cidade']."</td>
                                <td>".$usuario['estado']."</td>
                                <td>".$usuario['pais']."</td>
                                <td>".$usuario['telefone']."</td>
                                <td>".$usuario['dataNascimento']."</td>
                                <td>".$usuario['idalbumprincipal']."</td>
                                <td>".$usuario['idalbumfavorito']."</td>";
                        echo "</tr>";
                    }


                ?>
            </table>
        </div>
    </article>
</body>
</html>
