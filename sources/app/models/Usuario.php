<?php 
    /**
     * Classe que representa os dados de um usuário do sistema   
     */
error_reporting(E_ALL);
     class Usuario{
        /**
         * @var int Id do usuário
         */
        private $id;

        /**
         * @var string Nome do usuário 
         */
         private $nome;

         /**
          * @var string Sobrenome do usuário
          */
         private $sobrenome;

          /**
         * @var string Data de nascimento do usuário
         */
        private $dataNascimento;

        /**
         * @var string Email do usuário
         */
        private $email;

        /**
         * @var string Senha do usuário
         */
        private $senha;

        /**
         * @var string Cidade do usuário
         */
        private $cidade;
        
        /**
         * @var string Estado do usuário
         */
        private $estado;

        /**
         * @var string País do usuário
         */
        private $pais;

        /**
         * @var string Telefone do usuário
         */
        private $telefone;

         /**
         * @var string Foto do perfil do usuário
         */
        private $foto_perfil;

         /**
         * @var Album Armazena um album principal do usuário
         */
        private $albumPrincipal;

         /**
         * @var Album Armazena um album favorito do usuário
         */
        private $albumFavorito;
                
        /**
         * Construtor da classe que depende do nome, sobrenome, email, senha, cidade,
         * estado, pais, telefone e foto do perfil.
         */
        
        function __construct(string $nome, string $sobrenome, string $dataNascimento, string $email, string $senha,
                                string $cidade, string $estado, string $pais){

            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->dataNascimento = $dataNascimento;
            $this->email = $email;
            $this->senha = hash('sha156', $senha);
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->pais = $pais;
        }        

         /**
          * @return int
          */
         public function getId(): int
         {
             return $this->id;
         }

         /**
          * @param int $id
          */
         public function setId(int $id): void
         {
             $this->id = $id;
         }

         /**
          * @return string
          */
         public function getNome(): string
         {
             return $this->nome;
         }

         /**
          * @param string $nome
          */
         public function setNome(string $nome): void
         {
             $this->nome = $nome;
         }

         /**
          * @return string
          */
         public function getSobrenome(): string
         {
             return $this->sobrenome;
         }

         /**
          * @param string $sobrenome
          */
         public function setSobrenome(string $sobrenome): void
         {
             $this->sobrenome = $sobrenome;
         }

         /**
          * @return string
          */
         public function getDataNascimento(): string
         {
             return $this->dataNascimento;
         }

         /**
          * @param string $dataNascimento
          */
         public function setDataNascimento(string $dataNascimento): void
         {
             $this->dataNascimento = $dataNascimento;
         }

         /**
          * @return string
          */
         public function getEmail(): string
         {
             return $this->email;
         }

         /**
          * @param string $email
          */
         public function setEmail(string $email): void
         {
             $this->email = $email;
         }

         /**
          * @return string
          */
         public function getSenha(): string
         {
             return $this->senha;
         }

         /**
          * @param string $senha
          */
         public function setSenha(string $senha): void
         {
             $this->senha = $senha;
         }

         /**
          * @return string
          */
         public function getCidade(): string
         {
             return $this->cidade;
         }

         /**
          * @param string $cidade
          */
         public function setCidade(string $cidade): void
         {
             $this->cidade = $cidade;
         }

         /**
          * @return string
          */
         public function getEstado(): string
         {
             return $this->estado;
         }

         /**
          * @param string $estado
          */
         public function setEstado(string $estado): void
         {
             $this->estado = $estado;
         }

         /**
          * @return string
          */
         public function getPais(): string
         {
             return $this->pais;
         }

         /**
          * @param string $pais
          */
         public function setPais(string $pais): void
         {
             $this->pais = $pais;
         }

         /**
          * @return string
          */
         public function getTelefone(): string
         {
             return $this->telefone;
         }

         /**
          * @param string $telefone
          */
         public function setTelefone(string $telefone): void
         {
             $this->telefone = $telefone;
         }

         /**
          * @return string
          */
         public function getFotoPerfil(): string
         {
             return $this->foto_perfil;
         }

         /**
          * @param string $foto_perfil
          */
         public function setFotoPerfil(string $foto_perfil): void
         {
             $this->foto_perfil = $foto_perfil;
         }

         /**
          * @return Album
          */
         public function getAlbumPrincipal(): Album
         {
             return $this->albumPrincipal;
         }

         /**
          * @param Album $albumPrincipal
          */
         public function setAlbumPrincipal(Album $albumPrincipal): void
         {
             $this->albumPrincipal = $albumPrincipal;
         }

         /**
          * @return Album
          */
         public function getAlbumFavorito(): Album
         {
             return $this->albumFavorito;
         }

         /**
          * @param Album $albumFavorito
          */
         public function setAlbumFavorito(Album $albumFavorito): void
         {
             $this->albumFavorito = $albumFavorito;
         }

         /**
        *   Método que verifica se o email e senha providos são iguais ao da instância.
        *   Sua importância é devido ao fato da senha ser codificada.
        *
        *   @return bool Retorna TRUE se igual, senão FALSE
        */
        public function igual(string $email, string $senha) {
            return $this->email === $email && $this->senha === hash('sha256', $senha);
        }
     }