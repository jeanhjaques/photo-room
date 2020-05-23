<?php
error_reporting(E_ALL);
/**
 * Cria uma instância do controlador para uso
 */
include_once('app/controllers/Controller.php');
include_once('app/controllers/LoginController.php');
$controller = new Controller();
$loginController = new LoginController();

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
        $loginController->logar($_POST['usuario'], $_POST['password']);
        break;
    default:
        $controller->login();
}
