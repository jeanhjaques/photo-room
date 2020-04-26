$(document).ready(function(){
    //------------------login--------------------
    $('#user').focus(function(){        
        $(this).css('border', '1px solid white');
        $('.erro-user').empty();
    });
    $('#senha').focus(function(){
        $(this).attr('placeholder', '');
        $(this).css('font-size', '25px');
        $('.erro-senha').empty();
    });
    $('#senha').focusout(function(){
        $(this).attr('placeholder', 'Senha');
        $(this).css('font-size', '16px');
        $(this).css('border', '1px solid white');
    });
    
    //------------validações login--------------------
    $('#btn-entrar').click(function(){
        var user = $('#user').val();
        var senha = $('#senha').val();
        
        if(user === ""){
            $('.erro-user').html('preencha o campo Usuario.');
            $('#user').css('border', '1px solid red');
        }
        if(senha === ""){
            $('.erro-senha').html('preencha o campo senha.');
            $('#senha').css('border', '1px solid red');
        }
    });   
    
    //-----formulário criar conta-----------    
    $('#name').focus(function(){        
        $(this).css('border', '1px solid white');
        $('.erro-name').empty();
    });
    $('#sobrenome').focus(function(){        
        $(this).css('border', '1px solid white');
        $('.erro-sobrenome').empty();
    });
    $('#email').focus(function(){        
        $(this).css('border', '1px solid white');
        $('.erro-email').empty();
    });    
    $('#password').focus(function(){
        $(this).attr('placeholder', '');
        $(this).css('font-size', '25px');
        $(this).css('border', '1px solid white');
        $('.erro-password').empty();
    });
    $('#password').focusout(function(){
        $(this).attr('placeholder', 'Senha');
        $(this).css('font-size', '16px');
    });
    $('#confsenha').focus(function(){
        $(this).attr('placeholder', '');
        $(this).css('font-size', '25px');
        $(this).css('border', '1px solid white');
        $('.erro-confsenha').empty();
    });
    $('#confsenha').focusout(function(){
        $(this).attr('placeholder', 'Confirmar Senha');
        $(this).css('font-size', '16px');
    }); 
    
    
    //---------------validações formulário criar conta--------------------- 
    $('#btn-enviar').click(function(){
        var nome = $('#name').val();
        var sobrenome = $('#sobrenome').val();
        var email = $('#email').val();
        var senha = $('#password').val();
        var confsenha = $('#confsenha').val();
        
        if(nome === ""){
            $('.erro-name').html('preencha o campo nome.');
            $('#name').css('border', '1px solid red');
        } 
        if(sobrenome === ""){
            $('.erro-sobrenome').html('preencha o campo sobrenome.');
            $('#sobrenome').css('border', '1px solid red');
        }
        if(email === ""){
            $('.erro-email').html('preencha o campo email.');
            $('#email').css('border', '1px solid red');
        }
        if(senha === ""){
            $('.erro-password').html('preencha o campo senha.');
            $('#password').css('border', '1px solid red');
        }
        if(confsenha === ""){
            $('.erro-confsenha').html('preencha o campo confirmar senha.');
            $('#confsenha').css('border', '1px solid red');
        }
    });
    
    //-----formulário enviar nova senha-----------    
    $('#email-ns').focus(function(){        
        $(this).css('border', '1px solid white');
        $('.erro-email-ns').empty();
    });
    
    
    //------------validações enviar nova senha--------------------
    $('#btn-env-ns').click(function(){
        var email_ns = $('#email-ns').val();        
        
        if(email_ns === ""){
            $('.erro-email-ns').html('preencha o campo e-mail.');
            $('#email-ns').css('border', '1px solid red');
        }        
    });   
});



