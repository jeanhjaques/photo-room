<?php
//Verificar como vai funcionar relacao Midia <- Album
require_once 'Conexao.php';
require_once 'Midia.php';

class VideoDAO{
    public function create(Video $video){
        $sql = 'INSERT INTO midia (datadeenvio, enderecoArquivo , descricao, tamanho, extensao, resolucao, album_idalbum, duracao) VALUES(current_date, ?, ?, ?, ?, ?, ?, ?)';
        $stmt = Conexao::getConnect()->prepare($sql);

        $stmt->bindValue(1,$video->getEnderecoArquivo());
        $stmt->bindValue(2, $video->getDescricao());
        $stmt->bindValue(3,$video->getTamanho());
        $stmt->bindValue(4,$video->getExtensao());
        $stmt->bindValue(5,$video->getResolucao());
        $stmt->bindValue(6,$video->getIdAlbum());
        $stmt->bindValue(7,$video->getDuracao());

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

    public function update(Video $video){
        $sql = 'UPDATE midia SET enderecoArquivo = ? , descricao = ?, tamanho = ? , extensao = ?, resolucao = ? WHERE idmidia = ?';
        $stmt = Conexao::getConnect()->prepare($sql);

        $stmt->bindValue(2,$video->getEnderecoArquivo());
        $stmt->bindValue(3, $video->getDescricao());
        $stmt->bindValue(4,$video->getTamanho());
        $stmt->bindValue(5,$video->getExtensao());
        $stmt->bindValue(6,$video->getResolucao());
        $stmt->bindValue(7,$video->getId());

        $stmt->execute();
    }

    public function delete($idvideo){
        $sql = 'SELECT * FROM midia WHERE idmidia = ?';
        $stmt = Conexao::getConnect()->prepare($sql);
        $stmt->bindValue(1, $idvideo);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
