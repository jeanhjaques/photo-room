<?php
error_reporting(E_ALL);
/**
 * Cria uma instância do controlador para uso
 */
include_once('app/controllers/Controller.php');
$controller = new Controller();

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
    case 'cadastrar': /*Consertar, devia ser como os outros*/
        $controller->cadastrar($_POST['name'], $_POST['sobrenome'], $_POST['dataNascimento'], $_POST['email'], $_POST['password'],
            $_POST['pais'], $_POST['estado'], $_POST['cidade']);
        break;
    default:
        $controller->login();
}
