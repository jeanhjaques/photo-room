<?php
require_once 'Controller.php';
require_once 'app/models/Usuario.php';
require_once 'app/models/UsuarioDAO.php';
require_once 'app/models/Album.php';
require_once 'app/models/AlbumDAO.php';

class AlbumController extends Controller {

    public static function criarAlbumPadrao($id){
        $albumPadrao = new Album("Padrão", "Álbum com todas as suas fotos", $id);
        AlbumDAO::create($albumPadrao);
        $dadosAlbumPadrao = AlbumDAO::buscaAlbumPadraoByIdDono($id);
        return $dadosAlbumPadrao['idalbum'];
    }
    public static function criarAlbumFavorito($id){
        $albumFavorito = new Album("Favorito", "Álbum com suas fotos favoritas", $id);
        AlbumDAO::create($albumFavorito);
        $dadosAlbumFavorito = AlbumDAO::buscaAlbumFavoritoByIdDono($id);
        return $dadosAlbumFavorito['idalbum'];
    }
}