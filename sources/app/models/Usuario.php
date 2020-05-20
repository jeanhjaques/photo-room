<?php 
    include_once('Banco.php');

    /**
     * Classe que representa os dados de um usuário do sistema     * 
     */

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
         * @var Album Armazena um array de abuns do usuário
         */
        private $otherAlbuns; 
        
        /**
         * Construtor da classe que depende do nome, sobrenome, email, senha, cidade,
         * estado, pais, telefone e foto do perfil.
         */
        
        function __construct(string $nome, string $sobrenome, string $dataNascimento, string $email, string $senha,
                                string $cidade, string $estado, string $pais, string $telefone, string $fotoPerfil){

            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->dataNascimento = $dataNascimento;
            $this->email = $email;
            $this->senha = hash('sha256', $senha);
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->pais = $pais;
            $this->telefone = $telefone;
            $this->foto_perfil = $fotoPerfil;
            
        }

        /**
         * Método mágico para acessar todos os campos.
         */
        public function __get($campo){
            return $this->$campo;
        }

        /**
         * Método mágico para modificar todos os campos
         */
        public function __set($campo, $valor){
            return $this->$campo = $valor;
        }

        /**
         * Método que verifica se o email e senha providos são iguais ao da instância. 
         * sua importancia é devido ao fato da senha ser codificada.  
         * 
         * @return bool Retorna TRUE se igual, senão FALSE 
         */
        public function igual(string $email, string $senha){
            return $this->email === $email && $this->senha === hash('sha256', $senha);
        }

        /**
         * Função que salva os dados de um usuário no banco.
         */
        public function salvar(){
            $db = Banco::getInstance();
            $stmt = $db->prepare('INSERT INTO Usuarios (nome, sobrenome, dataNasc, email, senha, cidade, estado, pais, telefone, foto_perfil)
                                    VALUE(:nome, :sobrenome, :dataNasc, :email, :senha, :cidade, :estado, :pais, :telefone, :foto)');
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':sobrenome', $this->sobrenome);
            $stmt->bindValue(':dataNasc', $this->dataNascimento);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->bindValue(':cidade', $this->cidade);
            $stmt->bindValue(':estado', $this->estado);
            $stmt->bindValue(':pais', $this->pais);
            $stmt->bindValue(':telefone', $this->telefone);
            $stmt->bindValue(':foto', $this->foto_perfil);
            $stmt->execute();
        }

        
        /**
         * Função que atualiza os dados de um usuário no banco.
         */
        public function atualizar(){
            $db = Banco::getInstance();
            $stmt = $db->prepare('UPDATE Usuarios SET ');
        }
        
        /**
         * Função que exclui o usuário do banco de dados.
         */
        public function deletar(){
            $db = Banco::getInstance();
            $stmt = $db->prepare('DELETE FROM Usuarios WHERE id_usuario = :id');
            $stmt->bindValue(':id', $this->id);
            $stmt->execute();
        }

        /**
         * Função estática, pois não depende do estado de uma instância, 
         * para buscar um usuário no banco.
         * 
         * @return Usuario retorna uma instância de usuário
         */
        public static function buscar(string $email){
            $bd = Banco::getInstance();

            $stmt = $bd->prepare('SELECT * FROM Usuarios WHERE email = :email');
            $stmt->bindValue(':email', $email);
            $stmt->excute();

            $resultado = $stmt->fetch();

            if($resultado){
                $usuario = new Usuario($resultado['id'], $resultado['nome'], $resultado['sobrenome'], $resultado['dataNasc'], $resultado['email'],
                                        $resultado['senha'], $resultado['cidade'], $resultado['estado'], $resultado['pais'], $resultado['telefone'], $resultado['foto_perfil']);

                return $usuario;
            }
            else{
                return null;
            }
        }
     }


?>