<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../res/styles/edicao.css">
    <title>Cadastro de Editoras</title>
</head>
<body>

    <div class="conteudo">

        <header>

            
            <h1>Cadastro de Editoras</h1>

            <a href="/editoras">Voltar</a>


        </header>

        <form role="form" action="/editoras/criar" method="post">
            <div class="campos">
                <div>
                    <label for="">Nome</label>
                    <input type="text" name="nome" placeHolder="Nome do editora" />
                </div>
            </div>
            
            <button type="submit" class="botao_cadastrar">Salvar</button>
        </form>

    </div>


    

    
</body>
</html>