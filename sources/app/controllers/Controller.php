<?php
error_reporting(E_ALL);
require_once 'app/models/Usuario.php';
require_once 'app/models/UsuarioDAO.php';
class Controller{
    public static function login(){
        require 'app/views/login/login.php';
    }
    public static function paginadeusuario(){
        require 'app/views/homepage/homepage.php';
    }
    public static function perfil(){
        require 'app/views/perfil/perfil.php';
    }
    public static function editarperfil(){
        require 'app/views/perfil/editarperfil.php';
    }
    public static function dashboard(){
        if($_SESSION['usuarioLogado']['admin'] != "1"){
            require 'app/views/homepage/homepage.php';
            echo "<script>
                alert(\"Você não é um administrador\");
            </script>";
        }
        else {
            require 'app/views/dashboard/dashboardUsuarios.php';
        }
    }

    public static function dashboardAlbuns(){
        require 'app/views/dashboard/dashboardAlbuns.php';
    }

    public static function dashboardMidias(){
        require 'app/views/dashboard/dashboardMidias.php';
    }

    public static function dashboardMidiasAlbuns(){
        require 'app/views/dashboard/dashboardMidiasAlbum.php';
    }

    public static function dashboardAlbunsUsuarios(){
        require 'app/views/dashboard/dashboardAlbunsUsuario.php';
    }
  
}