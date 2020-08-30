<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Autores</title>
</head>
<body>

    <h1>Cadastro de Autores</h1>

    <a href="/autores">Voltar</a>

    <form role="form" action="/autores/criar" method="post">
        <input type="text" name="nome" placeHolder="Nome do Autor"/>
        <button type="submit">Salvar</button>
    </form>

    
</body>
</html>