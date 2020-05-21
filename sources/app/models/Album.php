<?php

class Album{
    private String $nome;
    private int $id;
    private Date $dataCriacao;
    private int $qtdMidias;
    private String $codCompartilhamento;
    private Midia $midias;

    /**
     * Album constructor.
     * @param $nome
     * @param $dataCriacao
     */
    public function __construct($nome, $dataCriacao){
        $this->nome = $nome;
        $this->dataCriacao = $dataCriacao;
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function setNome(string $nome): void{
        $this->nome = $nome;
    }

    public function getId(): int{
        return $this->id;
    }

    public function setId(int $id): void{
        $this->id = $id;
    }

    public function getDataCriacao(): Date{
        return $this->dataCriacao;
    }

    public function setDataCriacao(Date $dataCriacao): void{
        $this->dataCriacao = $dataCriacao;
    }

    public function getQtdMidias(): int{
        return $this->qtdMidias;
    }

    public function setQtdMidias(int $qtdMidias): void{
        $this->qtdMidias = $qtdMidias;
    }

    public function getCodCompartilhamento(): string{
        return $this->codCompartilhamento;
    }

    public function setCodCompartilhamento(string $codCompartilhamento): void{
        $this->codCompartilhamento = $codCompartilhamento;
    }

    public function getMidias(): Midia{
        return $this->midias;
    }

    public function setMidias(Midia $midias): void{
        $this->midias = $midias;
    }
}