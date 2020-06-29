<?php
//classe responsável pela configuração da conexão com o banco de dados
error_reporting(E_ALL);
class Conexao{
    private static $instance;

    public static function getConnect(){
        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=localhost;port=3306;dbname=photoroom;', 'root', '');
        }
        return self::$instance;
    }
}