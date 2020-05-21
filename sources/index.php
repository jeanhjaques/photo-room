<?php
/**
 * Cria uma instância do controlador para uso
 */
include_once('app/controllers/Controller.php');
$controller = new Controller();

/**
 * Seleciona a rota correta.
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
    default:
        $controller->login();
}