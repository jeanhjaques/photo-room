<?php
error_reporting(E_ALL);
session_start();
/**
 * Cria uma instância do controlador para uso
 */
include_once('app/controllers/Controller.php');
include_once('app/controllers/LoginController.php');
include_once('app/controllers/UsuarioController.php');
include_once('app/controllers/MidiaController.php');
$controller = new Controller();
$loginController = new LoginController();
$usuarioController = new UsuarioController();
$midiaController = new MidiaController();

/**
 * Seleciona a rota correta.
 Ex :http://localhost/resources/?action=login
 */
switch ($_GET['action']) {
    case 'login':
        $controller->login();
        break;
    case 'paginadeusuario':
        $controller->paginadeusuario();
        break;
    case 'perfil':
        $controller->perfil();
        break;
    case 'cadastrar':
        $loginController->cadastrar($_POST['name'], $_POST['sobrenome'], $_POST['dataNascimento'], $_POST['email'], $_POST['password'],
            $_POST['pais'], $_POST['estado'], $_POST['cidade']);
        break;
    case 'logar':
        $loginController->logar($_POST['email'], $_POST['senha']);
        break;
    case 'atualizarusuario':
        $usuarioController->atualizarImagemPerfil($_FILES['imagem-perfil']);
        break;
    case 'cadastrarimagemalbumpadrao':
        $midiaController->cadastrarMidia($_FILES['nova-imagem'], $_SESSION['usuarioLogado']['idalbumprincipal']);
        break;
    default:
        $controller->login();
}
