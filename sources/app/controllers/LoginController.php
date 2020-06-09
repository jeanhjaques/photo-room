<?php
    require_once 'Controller.php';
    require_once 'app/models/Usuario.php';
    require_once 'app/models/UsuarioDAO.php';

    class LoginController extends Controller {


        public function cadastrar($nome, $sobrenome, $dataNascimento, $email, $senha, $pais, $estado, $cidade){

            $novousuario = new Usuario($nome, $sobrenome, $dataNascimento,
                $email, MD5($senha), $cidade, $estado, $pais);
            try {
                UsuarioDAO::create($novousuario);
                $_SESSION['user'] = "<h1>Usuario Cadastrado</h1>";
            }
            catch(PDOException $erro) {
                $_SESSION['loginErro'] = "<h1>Impossivel cadastradar</h1>";
            }
            $this->login();
        }

        public function logar($email, $senha){
            
            $loginUser = UsuarioDAO::find($email, MD5($senha));
            
            if($loginUser != null){
                $_SESSION['usuarioLogado'] = $loginUser;
                $this->paginadeusuario();
            }
            else {
                // header('Location: index.php?email=' . $_POST['email'] . '&mensagem=Usuário e/ou senha incorreta!');
                $_SESSION['loginErro'] = "<h1>Não foi possível entrar</h1>";
                $this->login();
            }

        }
    }