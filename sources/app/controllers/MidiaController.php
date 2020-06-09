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

        $novamidia = new Midia($novo_nome, $idAlbum);

        try {
                MidiaDAO::create($novamidia);
                $this->paginadeusuario();
        }
        catch(PDOException $erro) {
            $this->paginadeusuario();
        }
    }

    public static function buscarImagens($idAlbum){
        return MidiaDAO::findByIdAlbum($idAlbum);
    }
}
