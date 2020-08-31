<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../res/styles/edicao.css">
    <link rel="stylesheet" href="../res/styles/font-awesome/css/font-awesome.min.css">
    
    <title>Cadastro de Autores</title>
</head>
<body>

    <div class="conteudo">

        <header>

            <h1>Cadastro de Autores</h1>

            <a href="/autores"><i class="fa fa-arrow-left"></i>Voltar</a>

        </header>
        

        <form role="form" action="/autores/criar" method="post">
            <div class="campo">
                <div>
                    <label for="">Nome</label>
                    <input type="text" name="nome" placeHolder="Nome do Autor"/>
                </div>
            </div>
            
            <button type="submit" class="botao_cadastrar">Salvar</button>
        </form>

    </div>

    
</body>
</html>