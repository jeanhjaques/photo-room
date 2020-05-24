<?php
    require_once 'Controller.php';
    require_once 'app/models/Usuario.php';
    require_once 'app/models/UsuarioDAO.php';

    class LoginController extends Controller {

        /**
        * @var Usuario armazena o usuário logado no momento.
        */
        private $loggedUser;

        // /**
        // *  Construtor da classe. 
        // *  Inicia/recupera a sessão do usuário e recupera o usuário logado.
        // */   
        // function __construct() {
        //     session_start();
        //     if (isset($_SESSION['user'])) $this->loggedUser = $_SESSION['user'];
        // }

        /**
         * 
         * 
         *  */
        public function cadastrar($nome, $sobrenome, $dataNascimento, $email, $senha, $pais, $estado, $cidade){

            $novousuario = new Usuario($nome, $sobrenome, $dataNascimento,
                $email, $senha, $cidade, $estado, $pais);
            try {
                UsuarioDAO::create($novousuario);
                $_SESSION['user'] = "<h1>Usuario Cadastrado</h1>";
            }
            catch(PDOException $erro) {
                $_SESSION['loginErro'] = "<h1>Impossivel cadastradar</h1>";
                //TO-DO
            }
            $this->login();
        }

        public function logar($email, $senha){
            
            $usuario = UsuarioDAO::find($email, $senha);
            
            if (!is_null($usuario) && $usuario->igual($_POST['email'], $_POST['senha'])) {
                $_SESSION['user'] = $this->loggedUser = $usuario;
            }

            if ($this->loggedUser) {
                header('Location: index.php?action=paginadeusuario');
            } else {
                // header('Location: index.php?email=' . $_POST['email'] . '&mensagem=Usuário e/ou senha incorreta!');
                header('Location: index.php?action=login');
            }

        }
    }