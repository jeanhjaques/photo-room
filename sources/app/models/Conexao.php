<?php
error_reporting(E_ALL);
//classe responsável pela configuração da conexão com o banco de dados
class Conexao{
    private static $instance;

    public static function getConnect(){
        if(!isset(self::$instance)){
            //Conexão BD
            self::$instance = new \PDO('psql:host=motty.db.elephantsql.com;dbname=eunurriz;', 'eunurriz', 'fvZQjc8u__BNzzQlupdYUwz851XZjX26');
            //Seleciona o esquema do BD
            $resultadoConexaoSchema = self::$instance->exec("SET search_path TO photoroomschema");
            //
            if(!$resultadoConexaoSchema){
                //Caso conexão com o schema seja falha o erro é reportado
                die('Failed to set schema: '.self::$instance->errorInfo());
            }
        }
        return self::$instance;
    }
}