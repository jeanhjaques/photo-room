<?php

class Midia{
    private $id;
    private  $enderecoArquivo;
    private  $descricao;
    private  $tamanho;
    private  $extensao;
    private  $resolucao;
    private  $idAlbum;

    private  $dataEnvio; /*data de envio para o site*/
    /**
     * Midia constructor.
     * @param String $enderecoArquivo
     * @param String $descricao
     * @param String $extensao
     */
    public function __construct($enderecoArquivo, $idAlbum)
    {
        $this->enderecoArquivo = $enderecoArquivo;
        $this->idAlbum = $idAlbum;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getEnderecoArquivo(){
        return $this->enderecoArquivo;
    }

    public function setEnderecoArquivo($enderecoArquivo){
        $this->enderecoArquivo = $enderecoArquivo;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getTamanho(){
        return $this->tamanho;
    }

    public function setTamanho($tamanho){
        $this->tamanho = $tamanho;
    }

    public function getExtensao(){
        return $this->extensao;
    }

    public function setExtensao($extensao){
        $this->extensao = $extensao;
    }

    public function getResolucao(){
        return $this->resolucao;
    }

    public function setResolucao($resolucao){
        $this->resolucao = $resolucao;
    }

    public function getDataEnvio(){
        return $this->dataEnvio;
    }

    public function setDataEnvio($dataEnvio){
        $this->dataEnvio = $dataEnvio;
    }

    public function getIdAlbum()
    {
        return $this->idAlbum;
    }

    public function setIdAlbum($idAlbum)
    {
        $this->idAlbum = $idAlbum;
    }


}
