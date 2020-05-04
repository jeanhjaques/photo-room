<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/perfil.css"  >
</head>
<body>
    <?php 
        include('header/header.php');
    ?>
    <article class="info">
        <div class="titulo">
            <h1>Informações do perfil</h1>
            <hr>
        </div>
        
       
        <div class="imagem">
            <img  src="../../public/imgperfil" alt="perfil" >
        </div>

        <div class="dados">
            <div>
                <label for="nome">Nome: </label>
                <span> Suellen Rosemberg dos Santos</span>
            </div>
            <div>
                <label for="email">Email: </label>
                <span> suellenrosemberg10@gmail.com</span>
            </div>
            <div>
                <label for="pais">País: </label>
                <span>Brasil</span>
            </div>
            <div>
                <label for="conta">Códico Conta: </label>
                <span>XXXX</span>
            </div>
            <div>
                <label for="cidade">Cidade: </label>
                <span>Campo Grande - MS</span>
            </div>
            <div>
                <label for="telefone">Telefone: </label>
                <span>99 9999-9999</span>
            </div>
        </div>
        
        
        
    </article>
    <div class="rodape">
        <div>Fênix Group</div> 
        <div>Copyright</div> 
        <div>2020</div> 
    </div>

</body>
</html>