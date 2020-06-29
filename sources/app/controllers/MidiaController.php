<?php
include_once('app/controllers/Controller.php');
require_once 'app/models/Midia.php';
require_once 'app/models/MidiaDAO.php';


class MidiaController extends Controller{
    public function cadastrarMidia($imagem, $idAlbum){
        $extensao = strtolower(substr($imagem['name'], -3));
        $data = date('d-m-Y-H-i-s');
        $novo_nome = $data . "." . $extensao;
        $diretorio = "public/upload/";
        move_uploaded_file($imagem['tmp_name'], $diretorio . $novo_nome);
        $tamanho = filesize($diretorio.$novo_nome);
        $tamanhoMB = $this->formatBytes($tamanho,2);
        $novamidia = new Midia($novo_nome, $idAlbum);
        $novamidia->setTamanho($tamanhoMB);
        $novamidia->setExtensao($extensao);

        try {
                MidiaDAO::create($novamidia);
                $midiaBD = MidiaDAO::buscaMidiaPorNomeArquivo($novo_nome);
                MidiaDAO::cadastrarEmAlbum($midiaBD['idmidia'], $idAlbum);
                $this->paginadeusuario();
        }
        catch(PDOException $erro) {
            $this->paginadeusuario();
        }
    }

    public static function buscarImagens($idAlbum){
        return MidiaDAO::findImgByIdAlbum($idAlbum);
    }

    public static function buscarVideos($idAlbum){
        return MidiaDAO::findVideoByIdAlbum($idAlbum);
    }

    public function favoritar($idImagem){
        MidiaDAO::cadastrarEmALbum($idImagem, $_SESSION['usuarioLogado']['idalbumfavorito']);
        $this->paginadeusuario();
    }

    public function desfavoritar($idImagem){
        MidiaDAO::removeMidiaAlbum($idImagem, $_SESSION['usuarioLogado']['idalbumfavorito']);
        $this->paginadeusuario();
    }

    public function addEmAlbum($idImagem, $idAlbum){
        MidiaDAO::cadastrarEmALbum($idImagem, $idAlbum);
        $this->paginadeusuario();
    }

    public function removeMidiaAlbum($idImagem, $idAlbum){
        MidiaDAO::removeMidiaAlbum($idImagem, $idAlbum);
        $this->paginadeusuario();
    }

    public static function formatBytes($size, $precision = 2){
        $base = log($size, 1024);
        $suffixes = array('', 'K', 'M', 'G', 'T');

        return round(pow(1024, $base - floor($base)), $precision);
    }

    public static function consultaTodosDadosMidia(){
        return MidiaDAO::read();
    }

    public static function consultaTodosDadosMidiaAlbum(){
        return MidiaDAO::readMidiaAlbum();
    }
}
