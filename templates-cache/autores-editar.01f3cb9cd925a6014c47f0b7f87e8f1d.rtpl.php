<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../res/styles/edicao.css">
    <title>Editar Autores</title>
</head>
<body>

    <div class="conteudo">
        
        <header>
            <h1>Editar Autores</h1>

            <a href="/autores">Voltar</a>

        </header>
    
        <form action="/autores/<?php echo $DATA["id"]; ?>" method="post">
            <input type="text"  id="<?php echo $DATA["nome"]; ?>" 
                    name="nome" placeholder="Digite o nome do autor" 
                    value="<?php echo $DATA["nome"]; ?>">
            <button type="submit" class="botao_cadastrar">Editar</button>
        </form>
    </div>
    
</body>
</html>