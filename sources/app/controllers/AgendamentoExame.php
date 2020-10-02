<?php

class AgendamentoExame
{
    private $idAgendamentoExame;
    private $idAssociado;
    private $idDependente;
    private $idMedico;
    private $dataExame;
    private $horaExame;
    private $localexame;
    private $status;
    private $notaAtendimento;
    private $notaExame;
    private $notaObservacao;
    private $solcitouCancelamento;
    private $motivoCancelamento;
    private $reservouAgenda;
    private $pos_venda;
    private $forma_pagamento;
    private $valor;

    /**
     * AgendamentoExame constructor.
     * @param $idAssociado
     * @param $dataExame
     * @param $horaExame
     * @param $localexame
     * @param $valor
     */
    public function __construct($idAssociado, $dataExame, $horaExame, $localexame, $valor)
    {
        $this->idAssociado = $idAssociado;
        $this->dataExame = $dataExame;
        $this->horaExame = $horaExame;
        $this->localexame = $localexame;
        $this->valor = $valor;
        $this->status = 'aguardando_escolha';
        $this->solcitouCancelamento = 0;
        $this->reservouAgenda = 0;
        $this->pos_venda = 0;
    }

    /**
     * @return mixed
     */
    public function getIdAgendamentoExame()
    {
        return $this->idAgendamentoExame;
    }

    /**
     * @param mixed $idAgendamentoExame
     */
    public function setIdAgendamentoExame($idAgendamentoExame)
    {
        $this->idAgendamentoExame = $idAgendamentoExame;
    }

    /**
     * @return mixed
     */
    public function getIdAssociado()
    {
        return $this->idAssociado;
    }

    /**
     * @param mixed $idAssociado
     */
    public function setIdAssociado($idAssociado)
    {
        $this->idAssociado = $idAssociado;
    }

    /**
     * @return mixed
     */
    public function getIdDependente()
    {
        return $this->idDependente;
    }

    /**
     * @param mixed $idDependente
     */
    public function setIdDependente($idDependente)
    {
        $this->idDependente = $idDependente;
    }

    /**
     * @return mixed
     */
    public function getIdMedico()
    {
        return $this->idMedico;
    }

    /**
     * @param mixed $idMedico
     */
    public function setIdMedico($idMedico)
    {
        $this->idMedico = $idMedico;
    }

    /**
     * @return mixed
     */
    public function getDataExame()
    {
        return $this->dataExame;
    }

    /**
     * @param mixed $dataExame
     */
    public function setDataExame($dataExame)
    {
        $this->dataExame = $dataExame;
    }

    /**
     * @return mixed
     */
    public function getHoraExame()
    {
        return $this->horaExame;
    }

    /**
     * @param mixed $horaExame
     */
    public function setHoraExame($horaExame)
    {
        $this->horaExame = $horaExame;
    }

    /**
     * @return mixed
     */
    public function getLocalexame()
    {
        return $this->localexame;
    }

    /**
     * @param mixed $localexame
     */
    public function setLocalexame($localexame)
    {
        $this->localexame = $localexame;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getNotaAtendimento()
    {
        return $this->notaAtendimento;
    }

    /**
     * @param mixed $notaAtendimento
     */
    public function setNotaAtendimento($notaAtendimento)
    {
        $this->notaAtendimento = $notaAtendimento;
    }

    /**
     * @return mixed
     */
    public function getNotaExame()
    {
        return $this->notaExame;
    }

    /**
     * @param mixed $notaExame
     */
    public function setNotaExame($notaExame)
    {
        $this->notaExame = $notaExame;
    }

    /**
     * @return mixed
     */
    public function getNotaObservacao()
    {
        return $this->notaObservacao;
    }

    /**
     * @param mixed $notaObservacao
     */
    public function setNotaObservacao($notaObservacao)
    {
        $this->notaObservacao = $notaObservacao;
    }

    /**
     * @return int
     */
    public function getSolcitouCancelamento()
    {
        return $this->solcitouCancelamento;
    }

    /**
     * @param int $solcitouCancelamento
     */
    public function setSolcitouCancelamento($solcitouCancelamento)
    {
        $this->solcitouCancelamento = $solcitouCancelamento;
    }

    /**
     * @return mixed
     */
    public function getMotivoCancelamento()
    {
        return $this->motivoCancelamento;
    }

    /**
     * @param mixed $motivoCancelamento
     */
    public function setMotivoCancelamento($motivoCancelamento)
    {
        $this->motivoCancelamento = $motivoCancelamento;
    }

    /**
     * @return int
     */
    public function getReservouAgenda()
    {
        return $this->reservouAgenda;
    }

    /**
     * @param int $reservouAgenda
     */
    public function setReservouAgenda($reservouAgenda)
    {
        $this->reservouAgenda = $reservouAgenda;
    }

    /**
     * @return int
     */
    public function getPosVenda()
    {
        return $this->pos_venda;
    }

    /**
     * @param int $pos_venda
     */
    public function setPosVenda($pos_venda)
    {
        $this->pos_venda = $pos_venda;
    }

    /**
     * @return mixed
     */
    public function getFormaPagamento()
    {
        return $this->forma_pagamento;
    }

    /**
     * @param mixed $forma_pagamento
     */
    public function setFormaPagamento($forma_pagamento)
    {
        $this->forma_pagamento = $forma_pagamento;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
}