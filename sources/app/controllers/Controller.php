<?php
error_reporting(E_ALL);
require_once 'app/models/Usuario.php';
require_once 'app/models/UsuarioDAO.php';
class Controller{
    public function login(){ 
        require 'app/views/login/login.php';
    }

    public function cadastrar($nome, $sobrenome, $dataNascimento, $email, $senha, $pais, $estado, $cidade){
        $novousuario = new Usuario($nome, $sobrenome, $dataNascimento,
            $email, $senha, $cidade, $estado, $pais);
        try {
            UsuarioDAO::create($novousuario);
            echo '<h1>entrei</h1>';
            $_SESSION['loginErro'] = "<h1>Usuario Cadastrado</h1>";
            require 'app/views/login/login.php';
        } 
        catch(PDOException $erro) {
            $_SESSION['loginErro'] = "<h1>Impossivel cadastradar</h1>";
            //TO-DO
        }   
    }
    public function paginadeusuario(){}
    public function perfil(){
        require 'app/views/perfil/perfil.php';
    }

  
}