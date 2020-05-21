<?php
    require_once 'Album.php';

    class AlbumDAO{
        public function create(Album $album){
            $sql = 'INSERT INTO Album (nomealbum, datacriacao, usuario_idusuario) VALUES(?, current_date, ?)';
            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1,$album->getNome());
            $stmt->bindValue(2,$album->getDono()->getId());

            $stmt->execute();
        }

        public function read(){
            $sql = 'SELECT * FROM album';
            $stmt = Conexao::getConnect()->prepare($sql);
            $stmt->execute();

            if($stmt->rowCount()>0){
                return $stmt->fetchAll(\PDO::FETCH_ASSOC); //retorna um array com todos os registros
            }
            else {
                return []; // retorna um array vazio caso não tenha nenhum item
            }
        }

        public function update(Album $album){
            $sql = 'UPDATE album SET  nomealbum = ?,  codCompartilhamento = ? , usuario_idusuario = ? WHERE idalbum = ?';
            $stmt = Conexao::getConnect()->prepare($sql);

            $stmt->bindValue(1, $album->getNome());
            $stmt->bindValue(2, $album->getCodCompartilhamento());
            $stmt->bindValue(3, $album->getDono()->getId());
            $stmt->bindValue(4, $album->getId());

            $stmt->execute();
        }

        public function delete($idalbum){
            $sql = 'SELECT * FROM midia WHERE idalbum = ?';
            $stmt = Conexao::getConnect()->prepare($sql);
            $stmt->bindValue(1, $idalbum);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
    }
