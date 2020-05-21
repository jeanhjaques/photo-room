<?php
    //Verificar como vai funcionar relacao Midia <- Album
    require_once 'Conexao.php';
    require_once 'Midia.php';

    class MidiaDAO{
        public function create(Midia $midia){
            $sql = 'INSERT INTO midia (datadeenvio, enderecoArquivo , descricao, tamanho, extensao, resolucao, album_idalbum) VALUES(?, ?, ?, ?, ?, ?, ?)';
            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1, current_date);
            $stmt->bindValue(2,$midia->getEnderecoArquivo());
            $stmt->bindValue(3, $midia->getDescricao());
            $stmt->bindValue(4,$midia->getTamanho());
            $stmt->bindValue(5,$midia->getExtensao());
            $stmt->bindValue(6,$midia->getResolucao());
            $stmt->bindValue(7,$midia->getIdAlbum());

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

        public function update(Midia $midia){
            $sql = 'UPDATE midia SET enderecoArquivo = ? , descricao = ?, tamanho = ? , extensao = ?, resolucao = ? WHERE idmidia = ?';
            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(2,$midia->getEnderecoArquivo());
            $stmt->bindValue(3, $midia->getDescricao());
            $stmt->bindValue(4,$midia->getTamanho());
            $stmt->bindValue(5,$midia->getExtensao());
            $stmt->bindValue(6,$midia->getResolucao());
            $stmt->bindValue(7,$midia->getId());
        }

        public function delete($idmidia){
            $sql = 'SELECT * FROM midia WHERE idmidia = ?';
            $stmt = Conexao::getConnect()->prepare($sql);
            $stmt->bindValue(1, $idmidia);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
    }
