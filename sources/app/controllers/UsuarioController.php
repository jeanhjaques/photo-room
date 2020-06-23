<?php
    date_default_timezone_set('America/Manaus');
    require_once 'Controller.php';
    require_once 'app/models/Usuario.php';
    require_once 'app/models/UsuarioDAO.php';

    class UsuarioController extends Controller
    {

        public function atualizarPerfil($imagem, $nome, $sobrenome, $email, $pais, $cidade, $telefone)
        {
            $id = $_SESSION['usuarioLogado']['idusuario'];

            $extensao = strtolower(substr($imagem['name'], -3));
            $data = date('d-m-Y-H-i-s');
            $novo_nome = $data . "." . $extensao;
            $diretorio = "public/upload/";
            move_uploaded_file($imagem['tmp_name'], $diretorio . $novo_nome);

            try {
                usuarioDAO::atualizaPerfil($novo_nome, $nome, $sobrenome, $pais, $cidade, $telefone, $id);
                $this->atualizarDadosUsuario($_SESSION['usuarioLogado']['email'],
                    $_SESSION['usuarioLogado']['senha']);
                $this->perfil();
            } catch (PDOException $erro) {
                $this->perfil();
            }

        }

       

        public static function atualizarDadosUsuario($email, $senha)
        {
            unset($_SESSION['usuarioLogado']);
            $_SESSION['usuarioLogado'] = $loginUser = UsuarioDAO::find($email, $senha);
        }

       


    }
