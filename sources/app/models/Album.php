<?php
require_once 'Usuario.php';
class Album{
    private $nome;
    private $id;
    private $dataCriacao;
    private $qtdMidias;
    private $codCompartilhamento;
    private $dono;
    private $midias;

    /**
     * Album constructor.
     * @param $nome
     * @param $dataCriacao
     */
    public function __construct($nome, $dataCriacao, Usuario $dono){
        $this->nome = $nome;
        $this->dataCriacao = $dataCriacao;
        $this->dono = $this->dono;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getDataCriacao(){
        return $this->dataCriacao;
    }

    public function setDataCriacao($dataCriacao){
        $this->dataCriacao = $dataCriacao;
    }

    public function getQtdMidias(){
        return $this->qtdMidias;
    }

    public function setQtdMidias($qtdMidias){
        $this->qtdMidias = $qtdMidias;
    }

    public function getCodCompartilhamento(){
        return $this->codCompartilhamento;
    }

    public function setCodCompartilhamento($codCompartilhamento){
        $this->codCompartilhamento = $codCompartilhamento;
    }

    public function getMidias(){
        return $this->midias;
    }

    public function setMidias($midias){
        $this->midias = $midias;
    }

    public function getDono(){
        return $this->dono;
    }

    public function setDono($dono){
        $this->dono = $dono;
    }
}
