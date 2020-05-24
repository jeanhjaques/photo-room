<?php
    require_once 'Usuario.php';
    require_once 'Conexao.php';
error_reporting(E_ALL);
    class UsuarioDAO{

        public static function create(Usuario $usuario){
            $sql = 'INSERT INTO usuario (nome, sobrenome , email, senha, cidade, estado, pais, dataNascimento) VALUES(?, ?, ?, ?, ?, ?, ?, ?)';
            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1, $usuario->getNome());
            $stmt->bindValue(2,$usuario->getSobrenome());
            $stmt->bindValue(3, $usuario->getEmail());
            $stmt->bindValue(4,$usuario->getSenha());
            $stmt->bindValue(5,$usuario->getCidade());
            $stmt->bindValue(6,$usuario->getEstado());
            $stmt->bindValue(7,$usuario->getPais());
            /*$stmt->bindValue(8,$usuario->getTelefone());
            $stmt->bindValue(9,$usuario->getAlbumPrincipal());
            $stmt->bindValue(10,$usuario->getAlbumFavorito());*/
            $stmt->bindValue(8, $usuario->getDataNascimento());

            $stmt->execute();
        }

        public function find($email, $senha) {
            $sql = 'SELECT * from usuario WHERE $email = :email';
            $stmt = Conexao::getConnect()->prepare($sql);
            $stmt->bindValue(':email', $email);
            $stmt->execute();

            $resultado = $stmt->fetch();

            if ($resultado) {
                $usuario = $resultado;
                $usuario->senha = $resultado['senha'];
                return $usuario;
            } else {
                return NULL;
            }

        }


        public function read(){
            $sql = 'SELECT * FROM usuario';
            $stmt = Conexao::getConnect()->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount()>0){
                return $stmt->fetchAll(\PDO::FETCH_ASSOC); //retorna um array com todos os registros
            }
            else {
                return []; // retorna um array vazio caso não tenha nenhum item
            }
        }

        public function update(Usuario $usuario){
            $sql = 'UPDATE usuario SET  nome = ?, sobrenome = ? , email = ?, senha = ?, 
                    cidade = ?, estado = ?, pais = ?, telefone = ?, idalbumprincipal = ?, 
                    idalbumfavorito = ?, dataNascimento = ?, endfotoperfil = ? WHERE idusuario = ?';
            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1, $usuario->getNome());
            $stmt->bindValue(2, $usuario->getSobrenome());
            $stmt->bindValue(3, $usuario->getEmail());
            $stmt->bindValue(4,$usuario->getSenha());
            $stmt->bindValue(5,$usuario->getCidade());
            $stmt->bindValue(6,$usuario->getEstado());
            $stmt->bindValue(7,$usuario->getPais());
            $stmt->bindValue(8,$usuario->getTelefone());
            $stmt->bindValue(9,$usuario->getAlbumPrincipal());
            $stmt->bindValue(10,$usuario->getAlbumFavorito());
            $stmt->bindValue(11, $usuario->getDataNascimento());
            $stmt->bindValue(12, $usuario->getFotoPerfil());
            $stmt->bindValue(13, $usuario->getId());

            $stmt->execute();

        }

        public function delete($idusuario){
            $sql = 'SELECT * FROM usuario WHERE idusuario = ?';
            $stmt = Conexao::getConnect()->prepare($sql);
            $stmt->bindValue(1, $idusuario);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
    }
