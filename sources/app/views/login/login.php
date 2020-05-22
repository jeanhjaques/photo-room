<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="app/views/login/estilo1.css">
        <script src="app/views/login/transacao.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="login_page">
            <div class="box">
                <h1>LOGO</h1> 
                <form id="formLogin" action="" method="post">
                    <input type="text" id="user" name="user" placeholder="Usuário" />
                    <p class="erro-user"></p>
                    <input type="password" id="senha" name="senha" placeholder="Senha" />
                    <p class="erro-senha"></p>
                    <input type="button" class="btn-login" id="btn-entrar" value="Entrar"/>
                </form>
                <a onclick="btnEsqueciSenha();">Esqueci a senha</a>
                <a onclick="btnCriarConta();">Criar Conta</a>
            </div>

            <div class="box-criarConta">
                <h1>LOGO</h1>
                <form id="formCriarConta" action="" method="post">
                    <input type="text" id="name" name="name" placeholder="Nome" />
                    <p class="erro-name"></p>
                    <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" />
                    <p class="erro-sobrenome"></p>
                    <input type="email" id="email" name="email" placeholder="Email" />
                    <p class="erro-email"></p>
                    <input type="password" id="password" name="password" placeholder="Senha" />
                    <p class="erro-password"></p>
                    <input type="password" id="confsenha" name="confsenha" placeholder="Confirmar Senha" />
                    <p class="erro-confsenha"></p>
                    <input type="button" class="btn-login" id="btn-enviar" value="Enviar" />
                </form>
                <a onclick="btnLogin()">Voltar para login</a>
            </div>

            <div class="box-senha">
                <h1>LOGO</h1>
                <strong>Iremos te enviar uma nova senha em seu email cadastrado</strong>
                <form id="form-ns" action="" method="post">
                    <input type="email" id="email-ns" name="email_ns" placeholder="Digite aqui seu e-mail de cadastro" />
                    <p class="erro-email-ns"></p>
                    <input type="button" class="btn-login" id="btn-env-ns" value="Enviar nova senha" />
                </form>
                <a onclick="btnLogin();">Voltar para login</a>
            </div>
        </div>        
    </body>
</html>
