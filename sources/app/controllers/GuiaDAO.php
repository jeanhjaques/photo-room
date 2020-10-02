<?php
require_once 'Guia.php';
require_once 'Conexao.php';

/* CREATE TABLE guia_solimed(
    id_guia int auto_increment primary key,
    endereco varchar(500),
    status_guia int not null default 0
); */

class Guia
{
    public static function create(Guia $guia){
        $sql = 'INSERT INTO guia_solimed (endereco, status_guia) VALUES(?,?)';
        $stmt = Conexao::getConnect()->prepare($sql);

        $stmt->bindValue(1,$guia->getEndereco());
        $stmt->bindValue(2,$guia->getStatusGuia());

        $stmt->execute();
    }

    public static function read(){
        $sql = 'SELECT * FROM guia_solimed';

        $stmt = Conexao::getConnect()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount()>0){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC); //retorna um array com todos os registros
        }
        else {
            return []; // retorna um array vazio caso não tenha nenhum item
        }
    }

    public static function update(Guia $guia){
        $sql = 'UPDATE guia_solimed SET endereco = ? , status_guia = ? WHERE id_guia = ?';
        
        $stmt = Conexao::getConnect()->prepare($sql);

        $stmt->bindValue(1,$guia->getEndereco());
        $stmt->bindValue(2,$guia->getStatusGuia());
        $stmt->bindValue(3,$guia->getIdGuia());


        $stmt->execute();
    }

    public static function delete($idGuia){
        $sql = 'DELETE FROM guia_solimed WHERE id_guia = ?';
        $stmt = Conexao::getConnect()->prepare($sql);
        $stmt->bindValue(1, $idGuia);
        $stmt->execute();
    }

    public static function relacionaGuiaAgendamento($idGuia, $idAgendamentoExame){
        $sql = 'INSERT INTO exames_agendamento_guia (id_agendamento_exames, id_guia) VALUES(?,?)';
        $stmt = Conexao::getConnect()->prepare($sql);

        $stmt->bindValue(1, $idAgendamentoExame);
        $stmt->bindValue(2, $idGuia);

        $stmt->execute();
    }
}