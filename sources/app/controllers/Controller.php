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
  
}