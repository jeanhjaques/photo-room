<?php
    include_once 'AgendamentoExame.php';
    include_once 'AgendamentoExameDAO.php';

    $novoAgendamentoBD = new AgendamentosExamesDAO();

    $qtdExames = 0; // Tratar o recebimento dos exames
    $exames[$qtdExames]; // Tratar o recebimento dos exames

    $idAssociado = 0; // Receber...
    $qtdAgendamentos = 0; //Receber via GET a qtde de exames a serem agendados
    $idDependente = 0; // Receber via GET a id do dependente
    $dependente = false; //Receber via GET se é para dependente ou não

    $novoAgendamento[$qtdAgendamentos];


    for($i = $novoAgendamento; $i>0; $i--){
        $novoAgendamento[$i] = new AgendamentoExame($idAssociado, $dataExame, $horaExame, $localexame, $valor);
        $novoAgendamentoBD->create($novoAgendamento[$i]);
        $dadosAtuaisAgendamentoExame = $novoAgendamentoBD->readStatusAndAssociado($idAssociado, 'aguardando_escolha');
        $novoAgendamentoBD->relacionaExameAgendamentoExame($idExame[$i], $dadosAtuaisAgendamentoExame[0]['id_agendamento_exames']);
        if($dependente){
            //Verifica se o exame é para dependente, se sim adiciona a id do dependente no agendamento
            $novoAgendamento[$i]->setIdAgendamentoExame($dadosAtuaisAgendamentoExame[0]['id_agendamento_exames']);
            $novoAgendamento[$i]->setIdDependente($idDependente);
            $novoAgendamentoBD->update($novoAgendamento[$i]);
        }
        $novoAgendamento[$i]->setStatus('aguardando_pagamento');
    }

?>