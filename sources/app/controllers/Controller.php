<?php
error_reporting(E_ALL);
require_once 'app/models/Usuario.php';
require_once 'app/models/UsuarioDAO.php';
class Controller{
    public function login(){ 
        require 'app/views/login/login.php';
    }
    public function paginadeusuario(){
        require 'app/views/homepage/homepage.php';
    }
    public function perfil(){
        require 'app/views/perfil/perfil.php';
    }
  
}