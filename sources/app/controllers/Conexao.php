<?php
//classe responsável pela configuração da conexão com o banco de dados
error_reporting(E_ALL);
class Conexao{
    private static $instance;

    public static function getConnect(){
        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=186.202.188.120;port=3306;dbname=mysqlsistark;', 'mysqlsistark', 'd503154Be2e9C7');
        }
        return self::$instance;
    }
}