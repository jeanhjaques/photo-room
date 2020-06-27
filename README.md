# Photo Room

<!--- Exemplos de badges. Acesse https://shields.io para outras opções. Você pode querer incluir informações de dependencias, build, testes, licença, etc. --->
![GitHub repo size](https://img.shields.io/github/repo-size/jeanhjaques/photo-room)
![GitHub contributors](https://img.shields.io/github/contributors/jeanhjaques/photo-room)

Photo Room é uma aplicação web que permite o armazenamento de imagens e videos visando ajudar seus usuários a se manterem organizados com relação a suas midias. 

<!--Coloque aqui linhas adicionais com informações sobre o que a aplicação faz. Sua introdução deve ser de no máximo 3 parágrafos, seja simples e objetivo para não sobrecarregar de detalhes desnecessários este espaço. Se necessário, crie novas seções abaixo. --->

Por meio do Photo Room o usuário é capaz de armazenar imagens e videos e além disso é possível criar albuns, ordenar imagens por diferentes critérios, criar albuns compartilhados e marcar suas favoritas. Nesta aplicação cada usuário possuí seu album principal(Que conta com todas as fotografias armazenadas), um álbum de favoritos e álbuns personalizados que podem possuir nomes e descrições personalizados.

## Pré-requisitos

Antes de iniciar, certifique-se de cumprir os seguintes requisitos:
<!--- Estes são alguns exemplos de requisitos. Adicione, duplique e remove como necessário --->
* Você deve possuir a última versão do PHP instalado.
* Você deve possuir uma máquina Windows/Linux.
* Você deve possuir alguma aplicação capaz de hospedar um servidor mySQL ou MariaDB.
* Você deve ler o arquivo https://github.com/jeanhjaques/photo-room/blob/master/license  a respeito da licença de uso.

## Como executar

1)Acesse Lib e crie um banco usando o scriptBD.
2)Prepare seu servidor php com os arquivos do projeto.
3)Acesse pelo navegador o site Endereconoseuserver/photo-room/sources
4)Encontre a pasta public do projeto em htdocs e dê todas as permissões para que o mesmo possa upar arquivos*
5)Cadastre-se
6)Efetue login

*Pode ser necessário alterar o arquivo php.ini do seu servidor afim de que o mesmo possa receber uploads e posts de arquivos grandes quando se tratar de videos,
o que deve ser alterado é o seguinte: Maximum allowed size for uploaded files e Maximum size of POST data that PHP will accept, ambos para 1024MB. 
Feito isso o site é capaz de receber arquivos de até 1GB

Linux:

Não há nenhum passo exclusivo.

Windows (opcional):

Não há nenhum passo exclusivo.

## Usando Photo Room

Para usar Photo Room, siga os seguintes passos (exemplos):

* Abra o navegador e digite o seguinte endereço: http://localhost/photo-room/sources
* Ao abrir a aplicação você poderá:
  * Se cadastrar
  * Efetuar login
  * Navegar entre imagens ou videos
  * Cadastar imagens em albuns
  * Cadastrar álbuns
  * favoritar imagens
  * Editar seu perfil
  * Deletar imagens, albuns e seu perfil
  * Acessar o dashboard para ver todos os cadastros efetuados¹
  
  ¹Para acessar o dashboard é necessario alterar a linha correspondente a seu usuario na tabela usuario do BD trocando o valor de admin para 1(true).

*Descreva as principais atividades, e/ou fluxos, que são possíveis de serem realizadas na aplicação.*
 Dentre os principais fluxos de atividades no site nós temos:
  1)Para trocar a navegação entre imagens e videos:
    Você deverá escolher as opções pelo menu fixado a esquerda, escolhendo uma opção a mudança é realizada e é possivel ver os arquivos.
  2)Para cadastrar imagens ou videos:
    Você deverá escolher as opção pelo menu fixado a esquerda, escolhendo o icone com simbolo de adição, logo após determinar o álbum e
    selecionar o arquivo que deseja enviar.
  3)Para acessar o perfil, dashboard e retornar ao contexto dos albuns:
    Ao clicar na foto de perfil do usuário um menu de contexto é aberto exibindo todas essas opções.

## Contribuidores

As seguintes pessoas contribuiram para este projeto:

* [Jean Henrique de Oliveira Jaques](https://github.com/jeanhjaques)
* [Suellen Rosemberg dos Santos](https://github.com/suellenRosemberg)
* [Daniel Elias de Oliveira Pinheiro](https://github.com/deopmaster)
* [Rubens de Oliveira Barbosa](https://github.com/Rubens86)

## Licença de uso

<!--- Se não tiver certeza de qual, verifique este site: https://choosealicense.com/--->
Este projeto usa a seguinte licença: GNU General Public License v3.0 (https://github.com/jeanhjaques/photo-room/blob/master/license).
