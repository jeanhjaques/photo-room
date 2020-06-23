<?php 
    /**
     * Classe que representa os dados de um usuário do sistema   
     */
error_reporting(E_ALL);
     class Usuario{

        private $id;
        private $nome;
        private $sobrenome;
        private $dataNascimento;
        private $email;
        private $senha;
        private $cidade;
        private $estado;
        private $pais;
        private $telefone;
        private $foto_perfil;
        private $albumPrincipal;
        private $albumFavorito;

         /**
          * Usuario constructor.
          * @param $nome
          * @param $sobrenome
          * @param $dataNascimento
          * @param $email
          * @param $senha
          * @param $cidade
          * @param $estado
          * @param $pais
          */

         public function __construct($nome, $sobrenome, $dataNascimento, $email, $senha, $cidade, $estado, $pais)
         {
             $this->nome = $nome;
             $this->sobrenome = $sobrenome;
             $this->dataNascimento = $dataNascimento;
             $this->email = $email;
             $this->senha = $senha;
             $this->cidade = $cidade;
             $this->estado = $estado;
             $this->pais = $pais;
         }

         /**
         * Construtor da classe que depende do nome, sobrenome, email, senha, cidade,
         * estado, pais, telefone e foto do perfil.
         */



         public function getId(){
             return $this->id;
         }

         public function setId($id){
             $this->id = $id;
         }

         public function getNome(){
             return $this->nome;
         }

         public function setNome($nome){
             $this->nome = $nome;
         }

         public function getSobrenome(){
             return $this->sobrenome;
         }

         public function setSobrenome($sobrenome){
             $this->sobrenome = $sobrenome;
         }

         public function getDataNascimento(){
             return $this->dataNascimento;
         }

         public function setDataNascimento($dataNascimento){
             $this->dataNascimento = $dataNascimento;
         }

         public function getEmail(){
             return $this->email;
         }

         public function setEmail($email){
             $this->email = $email;
         }

         public function getSenha(){
             return $this->senha;
         }

         public function setSenha($senha){
             $this->senha = $senha;
         }

         public function getCidade(){
             return $this->cidade;
         }

         public function setCidade($cidade){
             $this->cidade = $cidade;
         }

         public function getEstado(){
             return $this->estado;
         }

         public function setEstado($estado){
             $this->estado = $estado;
         }

         public function getPais(){
             return $this->pais;
         }

         public function setPais($pais){
             $this->pais = $pais;
         }

         public function getTelefone(){
             return $this->telefone;
         }

         public function setTelefone($telefone){
             $this->telefone = $telefone;
         }

         public function getFotoPerfil(){
             return $this->foto_perfil;
         }

         public function setFotoPerfil($foto_perfil){
             $this->foto_perfil = $foto_perfil;
         }

         public function getAlbumPrincipal(){
             return $this->albumPrincipal;
         }

         public function setAlbumPrincipal($albumPrincipal){
             $this->albumPrincipal = $albumPrincipal;
         }

         public function getAlbumFavorito(){
             return $this->albumFavorito;
         }

         public function setAlbumFavorito($albumFavorito){
             $this->albumFavorito = $albumFavorito;
         }
     }