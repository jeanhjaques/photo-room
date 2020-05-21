<?php

class Midia{
    private $id;
    private String $enderecoArquivo;
    private String $descricao;
    private String $tamanho;
    private String $extensao;
    private String $resolucao;
    private int $idAlbum;

    private Date $dataEnvio; /*data de envio para o site*/
    /**
     * Midia constructor.
     * @param String $enderecoArquivo
     * @param String $descricao
     * @param String $extensao
     */
    public function __construct(string $enderecoArquivo, string $descricao, string $extensao, int $idAlbum)
    {
        $this->enderecoArquivo = $enderecoArquivo;
        $this->descricao = $descricao;
        $this->extensao = $extensao;
        $this->idAlbum = $idAlbum;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id): void{
        $this->id = $id;
    }

    public function getEnderecoArquivo(): string{
        return $this->enderecoArquivo;
    }

    public function setEnderecoArquivo(string $enderecoArquivo): void{
        $this->enderecoArquivo = $enderecoArquivo;
    }

    public function getDescricao(): string{
        return $this->descricao;
    }

    public function setDescricao(string $descricao): void{
        $this->descricao = $descricao;
    }

    public function getTamanho(): string{
        return $this->tamanho;
    }

    public function setTamanho(string $tamanho): void{
        $this->tamanho = $tamanho;
    }

    public function getExtensao(): string{
        return $this->extensao;
    }

    public function setExtensao(string $extensao): void{
        $this->extensao = $extensao;
    }

    public function getResolucao(): string{
        return $this->resolucao;
    }

    public function setResolucao(string $resolucao): void{
        $this->resolucao = $resolucao;
    }

    public function getDataEnvio(): Date{
        return $this->dataEnvio;
    }

    public function setDataEnvio(Date $dataEnvio): void{
        $this->dataEnvio = $dataEnvio;
    }

    /**
     * @return int
     */
    public function getIdAlbum(): int
    {
        return $this->idAlbum;
    }

    /**
     * @param int $idAlbum
     */
    public function setIdAlbum(int $idAlbum): void
    {
        $this->idAlbum = $idAlbum;
    }


}