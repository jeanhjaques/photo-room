<?php
class Video extends Midia{
    private $duracao;

    /**
     * Video constructor.
     * @param $duracao
     */
    public function __construct($duracao){
        $this->duracao = $duracao;
    }

    /**
     * @return mixed
     */
    public function getDuracao(){
        return $this->duracao;
    }

    /**
     * @param mixed $duracao
     */
    public function setDuracao($duracao){
        $this->duracao = $duracao;
    }


}
