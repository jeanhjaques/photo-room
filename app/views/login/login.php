<?php
    session_start();
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Photo Room Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="app/views/login/login1.css">        
        <script src="app/views/login/transacao.js" type="text/javascript"></script> 
        <script src="app/views/login/login.js" type="text/javascript"></script>      
    </head>
    <body>
        <div class="login_page">
            <div class="box">
                <img class="logo" src="public/img/logo.png">                             
                <div class="msg">                  
                    <?php
                        if(isset($_SESSION['loginErro'])){
                            echo $_SESSION['loginErro'];
                            unset($_SESSION['loginErro']);
                        }                                                                       
                    ?>  
                </div>                                         
                
                <form id="formLogin" action="index.php?action=logar" method="post">
                    <input type="email" id="email" name="email" placeholder="Email" />
                    <p class="erro-user"></p>
                    <input type="password" id="senha" name="senha" placeholder="Senha" />
                    <p class="erro-senha"></p>
                    <input type="submit" class="btn-login" id="btn-entrar" value="Entrar" />
                </form>                
                <a onclick="btnEsqueciSenha();">Esqueci a senha</a>
                <a onclick="btnCriarConta();">Criar Conta</a>                            
            </div>

            <div class="box-criarConta">
                <img class="logo" src="public/img/logo.png">                 
                <form id="formCriarConta" action="index.php?action=cadastrar" method="post">
                    <legend>*</legend>
                    <input type="text" id="name" name="name" placeholder="Nome" required/>                    
                    <p class="erro-name"></p>
                    <legend>*</legend>
                    <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome" required/>
                    <p class="erro-sobrenome"></p>
                    <legend>*</legend>
                    <input type="text" id="dataNascimento" name="dataNascimento" maxlength="10" onkeypress="return dateMask(this, event);" placeholder="Data Nascimento" required/>
                    <p class="erro-dataNascimento"></p>
                    <legend>*</legend>
                    <input type="email" id="email" name="email" placeholder="Email" required/>
                    <p class="erro-email"></p>
                    <input type="text" id="telefone" name="telefone"  onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" maxlength="15" placeholder="Tel. Celular"/>
                    <p class="erro-email"></p>
                    <legend>*</legend>
                    <input type="password" id="password" name="password" placeholder="Senha" required/>
                    <p class="erro-password"></p>                    
                    <input type="text" id="pais" name="pais" placeholder="País" />
                    <p class="erro-pais"></p>
                    <input type="text" id="estado" name="estado" placeholder="Estado" />
                    <p class="erro-estado"></p>
                    <input type="text" id="cidade" name="cidade" placeholder="Cidade" />
                    <p class="erro-cidade"></p>
                    <input type="submit" class="btn-login" id="btn-enviar" value="Cadastrar" />
                </form>
                <a onclick="btnLogin()">Voltar para login</a>
            </div>

            <!-- Tela de enviar uma nova semnha para o email de cadastro -->
            <div class="box-senha">
                <img class="logo" src="public/img/logo.png">
                <div>
                    <strong>Iremos te enviar uma nova senha em seu email cadastrado</strong>
                </div>                
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
