<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Editoras</title>
</head>
<body>

    <h1>Cadastro de Editoras</h1>

    <a href="/editoras">Voltar</a>

    <form role="form" action="/editoras/criar" method="post">
        <input type="text" name="nome" placeHolder="Nome do editora"/>
        <button type="submit">Salvar</button>
    </form>

    
</body>
</html>