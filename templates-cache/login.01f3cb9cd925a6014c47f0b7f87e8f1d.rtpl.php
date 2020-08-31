<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../res/styles/login.css">
    <link rel="stylesheet" href="../res/styles/font-awesome/css/font-awesome.min.css">
    
    <title>Cadastro de Autores</title>
</head>
<body>

    <div class="conteudo">

        <header>

            <h1>Login</h1>

            <a href="/"><i class="fa fa-arrow-left"></i>Voltar</a>

        </header>
        

        <form role="form" action="/login" method="post">
            <div class="campo">
                <div>
                    <label for="">Login</label>
                    <input type="text" name="login" placeHolder="Login"/>
                </div>

                <div>
                    <label for="">Senha</label>
                    <input type="password" name="senha" placeHolder="Senha"/>
                </div>
            </div>
            
            <button type="submit" class="botao_cadastrar">Login</button>
        </form>

    </div>

    
</body>
</html>