<?php
require_once 'Controller.php';
require_once 'app/models/Usuario.php';
require_once 'app/models/UsuarioDAO.php';
require_once 'app/models/Album.php';
require_once 'app/models/AlbumDAO.php';

class AlbumController extends Controller {

    public static function criarAlbumPadrao($id){
        $albumPadrao = new Album("Padrão", "Álbum com todas as suas mídias", $id);
        AlbumDAO::create($albumPadrao);
        $dadosAlbumPadrao = AlbumDAO::buscaAlbumPadraoByIdDono($id);
        return $dadosAlbumPadrao['idalbum'];
    }
    public static function criarAlbumFavorito($id){
        $albumFavorito = new Album("Favorito", "Álbum com suas mídias favoritas", $id);
        AlbumDAO::create($albumFavorito);
        $dadosAlbumFavorito = AlbumDAO::buscaAlbumFavoritoByIdDono($id);
        return $dadosAlbumFavorito['idalbum'];
    }

    public static function buscaDono($id){
        $dados = UsuarioDAO::readByID($id);
        return $dados['nome'];
    }

    public function criarAlbum($nome, $descricao){
        $novoAlbum = new Album($nome, $descricao, $_SESSION['usuarioLogado']['idusuario']);
        AlbumDAO::create($novoAlbum);
        $albumBD = AlbumDAO::readByIdDonoAndNome($nome, $_SESSION['usuarioLogado']['idusuario']);
        AlbumDAO::cadastrarEmUsuario($_SESSION['usuarioLogado']['idusuario'], $albumBD['idalbum']);
        $this->paginadeusuario();
    }

    public static  function buscarAlbuns(){
       return AlbumDAO::readById($_SESSION['usuarioLogado']['idusuario']);
    }

    public function registrarAlbumComCodigo($codigocompAlbum){
        $album = AlbumDAO::readByCodComp($codigocompAlbum);
        AlbumDAO::cadastrarEmUsuario($_SESSION['usuarioLogado']['idusuario'], $album['idalbum'] );
        $this->paginadeusuario();
    }

    public static function consultaTodosAlbuns(){
        return AlbumDAO::read();
    }
}