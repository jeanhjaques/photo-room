<?php
    require_once 'Controller.php';
    require_once 'app/models/Usuario.php';
    require_once 'app/models/UsuarioDAO.php';

    class LoginController extends Controller {
        public function cadastrar($nome, $sobrenome, $dataNascimento, $email, $senha, $pais, $estado, $cidade){

            $novousuario = new Usuario($nome, $sobrenome, $dataNascimento,
                $email, $senha, $cidade, $estado, $pais);
            try {
                UsuarioDAO::create($novousuario);
                $_SESSION['loginErro'] = "<h1>Usuario Cadastrado</h1>";
            }
            catch(PDOException $erro) {
                $_SESSION['loginErro'] = "<h1>Impossivel cadastradar</h1>";
                //TO-DO
            }
            $this->login();
        }

        public function logar($email, $senha){
            //TO-DO
        }
    }