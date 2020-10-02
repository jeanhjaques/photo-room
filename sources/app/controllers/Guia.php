<?php

class Guia
{
    private $idGuia;
    private $endereco;
    private $statusGuia;

    public function __construct($endereco)
    {
        $this->$endereco = $endereco;
        $statusGuia = 0;
    }

    public function getIdGuia()
    {
        return $this->idGuia;
    }

    public function setIdGuia($idGuia)
    {
        $this->$idGuia = $idGuia;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->$endereco = $endereco;
    }

    public function getStatusGuia()
    {
        return $this->statusGuia;
    }

    public function setStatusGuia($statusGuia)
    {
        $this->$statusGuia = $statusGuia;
    }
}