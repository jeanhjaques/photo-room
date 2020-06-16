<?php
    //Verificar como vai funcionar relacao Midia <- Album
    require_once 'Conexao.php';
    require_once 'Midia.php';

    class MidiaDAO{
        public static function create(Midia $midia){
            $sql = 'INSERT INTO midia (datadeenvio, enderecoArquivo, album_idalbum) VALUES(current_timestamp , ?, ?)';

            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1,$midia->getEnderecoArquivo());
            $stmt->bindValue(2, $midia->getIdAlbum());

            $stmt->execute();
        }

        public function read(){
            $sql = 'SELECT * FROM midia';
            $stmt = Conexao::getConnect()->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount()>0){
                return $stmt->fetchAll(\PDO::FETCH_ASSOC); //retorna um array com todos os registros
            }
            else {
                return []; // retorna um array vazio caso não tenha nenhum item
            }
        }

        public static function findByIdAlbum($idAlbum){
            $sql = 'SELECT * FROM midia as m JOIN midia_album as ma ON m.idmidia = ma.idmidia WHERE ma.idalbum = ?';
            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1,$idAlbum);

            $stmt->execute();

            if($stmt->rowCount()>0){
                return $stmt->fetchAll(\PDO::FETCH_ASSOC); //retorna um array com todos os registros
            }
            else {
                return null; // retorna um array vazio caso não tenha nenhum item
            }
        }

        public static function findByIdImagemAndAlbum($idMidia, $idAlbum){
            $sql = 'SELECT * FROM midia WHERE album_idalbum = ? AND idmidia = ?';
            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1,$idAlbum);
            $stmt->bindValue(1,$idMidia);

            $stmt->execute();

            if($stmt->rowCount()>0){
                return $stmt->fetch(\PDO::FETCH_ASSOC); //retorna um array com todos os registros
            }
            else {
                return null; // retorna um array vazio caso não tenha nenhum item
            }
        }

        public static function cadastrarEmALbum($idMidia, $idAlbum){
            $sql = 'INSERT INTO midia_album VALUES(?, ?)';

            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1,$idMidia);
            $stmt->bindValue(2, $idAlbum);

            $stmt->execute();
        }

        public static function removeMidiaAlbum($idMidia, $idAlbum){
            $sql = 'DELETE FROM `midia_album` WHERE `midia_album`.`idmidia` = ? AND `midia_album`.`idalbum` = ?';

            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1,$idMidia);
            $stmt->bindValue(2, $idAlbum);

            $stmt->execute();
    }

        public static function buscaMidiaPorNomeArquivo($nomeArquivo){
            $sql = 'SELECT * FROM midia WHERE enderecoArquivo = ?';
            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1,$nomeArquivo);

            $stmt->execute();

            if($stmt->rowCount()>0){
                return $stmt->fetch(\PDO::FETCH_ASSOC); //retorna um array com todos os registros
            }
            else {
                return null; // retorna um array vazio caso não tenha nenhum item
            }
        }

        public function update(Midia $midia){
            $sql = 'UPDATE midia SET enderecoArquivo = ? , descricao = ?, tamanho = ? , extensao = ?, resolucao = ? WHERE idmidia = ?';
            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(2,$midia->getEnderecoArquivo());
            $stmt->bindValue(3, $midia->getDescricao());
            $stmt->bindValue(4,$midia->getTamanho());
            $stmt->bindValue(5,$midia->getExtensao());
            $stmt->bindValue(6,$midia->getResolucao());
            $stmt->bindValue(7,$midia->getId());

            $stmt->execute();
        }

        public function delete($idmidia){
            $sql = 'SELECT * FROM midia WHERE idmidia = ?';
            $stmt = Conexao::getConnect()->prepare($sql);
            $stmt->bindValue(1, $idmidia);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
    }
