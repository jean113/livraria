<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../res/styles/login.css">
    <link rel="stylesheet" href="../res/styles/font-awesome/css/font-awesome.min.css">
    
    <title>Login</title>
</head>
<body>

    <div class="conteudo">

        <header>

            <a href="/"><i class="fa fa-arrow-left"></i>Voltar</a>

        </header>

        <main>

            <form role="form" action="/login" method="post">
                <div class="logo">
                    <i class="fa fa-user-circle fa-5x"></i>
                </div>
                <div class="campos">
                    <div>
                        <input type="text" name="login" placeHolder="Login"/>
                    </div>
    
                    <div>
                        <input type="password" name="senha" placeHolder="Senha"/>
                    </div>

                    <?php if( $DATA=='erro' ){ ?>
                    <span>Usuário inexistente e/ou senha inválida!!!</span>
                    <?php } ?>

                    <button type="submit" class="botao_cadastrar">Login</button>
      
                    
                </div>
                
                
            </form>


        </main>
        

        

    </div>

    
</body>
</html>