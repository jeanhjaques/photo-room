<?php
require_once 'Conexao.php';
require_once 'AgendamentoExame.php';

class AgendamentosExamesDAO
{
    public static function create(AgendamentoExame $exame){
        $sql = 'INSERT INTO agendamento_exames_solimed (id_associado, id_dependente, id_medico , data_exame, hora_exame, local_exame, status,
        nota_atendimento, nota_exame, nota_observacao, solicitou_cancelamento, motivo_cancelamento, reservou_agenda, pos_venda, forma_pagamento, valor) 
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
        $stmt = Conexao::getConnect()->prepare($sql);

        $stmt->bindValue(1,$exame->getIdAssociado());
        $stmt->bindValue(2,$exame->getIdDependente());
        $stmt->bindValue(3,$exame->getIdMedico());
        $stmt->bindValue(4,$exame->getDataExame());
        $stmt->bindValue(5,$exame->getHoraExame());
        $stmt->bindValue(6,$exame->getLocalExame());
        $stmt->bindValue(7,$exame->getStatus());
        $stmt->bindValue(8,$exame->getNotaAtendimento());
        $stmt->bindValue(9,$exame->getNotaExame());
        $stmt->bindValue(10,$exame->getNotaObservacao());
        $stmt->bindValue(11,$exame->getSolcitouCancelamento());
        $stmt->bindValue(12,$exame->getMotivoCancelamento());
        $stmt->bindValue(13,$exame->getReservouAgenda());
        $stmt->bindValue(14,$exame->getPosVenda());
        $stmt->bindValue(15,$exame->getFormaPagamento());
        $stmt->bindValue(16,$exame->getValor());

        $stmt->execute();
    }
    public static function read(){
        $sql = 'SELECT * FROM agendamento_exames_solimed';
        $stmt = Conexao::getConnect()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount()>0){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC); //retorna um array com todos os registros
        }
        else {
            return []; // retorna um array vazio caso não tenha nenhum item
        }
    }
    public static function update(AgendamentoExame $exame){
        $sql = 'UPDATE agendamento_exames_solimed SET id_associado = ?, id_dependente = ?, id_medico = ?, data_exame = ?, hora_exame = ?, local_exame = ?, 
        status = ?, nota_atendimento = ?, nota_exame = ?, nota_observacao = ?, solicitou_cancelamento = ?, motivo_cancelamento = ?, reservou_agenda = ?, pos_venda = ?, forma_pagamento = ?, valor = ? WHERE id_agendamento_exames = ?';
        
        $stmt = Conexao::getConnect()->prepare($sql);

        $stmt->bindValue(1,$exame->getIdAssociado());
        $stmt->bindValue(2,$exame->getIdDependente());
        $stmt->bindValue(3,$exame->getIdMedico());
        $stmt->bindValue(4,$exame->getDataExame());
        $stmt->bindValue(5,$exame->getHoraExame());
        $stmt->bindValue(6,$exame->getLocalExame());
        $stmt->bindValue(7,$exame->getStatus());
        $stmt->bindValue(8,$exame->getNotaAtendimento());
        $stmt->bindValue(9,$exame->getNotaExame());
        $stmt->bindValue(10,$exame->getNotaObservacao());
        $stmt->bindValue(11,$exame->getSolcitouCancelamento());
        $stmt->bindValue(12,$exame->getMotivoCancelamento());
        $stmt->bindValue(13,$exame->getReservouAgenda());
        $stmt->bindValue(14,$exame->getPosVenda());
        $stmt->bindValue(15,$exame->getFormaPagamento());
        $stmt->bindValue(16,$exame->getValor());
        $stmt->bindValue(17,$exame->getIdAgendamentoExame());

        $stmt->execute();
    }

    public static function delete($idAgendamentoExame){
        $sql = 'DELETE FROM agendamento_exames_solimed WHERE id_agendamento_exames = ?';
        $stmt = Conexao::getConnect()->prepare($sql);
        $stmt->bindValue(1, $idAgendamentoExame);
        $stmt->execute();
    }

    public static function relacionaExameAgendamentoExame($idExame, $idAgendamentoExame){
        $sql = 'INSERT INTO exames_agendamento_solimed(id_agendamento_exames, id_exame) VALUES(?,?)';
        $stmt = Conexao::getConnect()->prepare($sql);

        $stmt->bindValue(1, $idAgendamentoExame);
        $stmt->bindValue(2, $idExame);

        $stmt->execute();
    }

    public static function readStatusAndAssociado($idAssociado, $status){
        $sql = 'SELECT * FROM agendamento_exames_solimed WHERE $id_associado = ? AND status = ?';
        $stmt = Conexao::getConnect()->prepare($sql);

        $stmt->bindValue(1, $idAssociado);
        $stmt->bindValue(2, $status);

        $stmt->execute();

        if($stmt->rowCount()>0){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC); //retorna um array com todos os registros
        }
        else {
            return []; // retorna um array vazio caso não tenha nenhum item
        }
    }

}