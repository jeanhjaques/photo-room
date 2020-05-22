<?php
require_once 'Controller.php';
require_once 'app/models/Usuario.php';
require_once 'app/models/UsuarioDAO.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['name'], $_POST['sobrenome'], $_POST['dataNascimento'], $_POST['email'], $_POST['password'],
        $_POST['pais'], $_POST['estado'], $_POST['cidade'])){
        $nome = $_POST['name'];
        $sobrenome = $_POST['sobrenome'];
        $dataNascimento = $_POST['dataNascimento'];
        $email = $_POST['email'];
        $senha = $_POST['password'];
        $pais = $_POST['pais'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        $novousuario = new Usuario($nome, $sobrenome, $dataNascimento,
            $email, $senha, $cidade, $estado, $pais);
        try {
            UsuarioDAO::create($novousuario);
            echo 'tentei';
            $_SESSION['loginErro'] = "<h1>Usuario Cadastrado</h1>";
        }
        catch(PDOException $erro) {
            $_SESSION['loginErro'] = "<h1>Impossivel cadastradar</h1>";
            //TO-DO
        }
    }
}