<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../res/styles/edicao.css">
    <title>Editar Editoras</title>
</head>
<body>

    <div class="conteudo">

        <header>
            <h1>Editar Editoras</h1>

            <a href="/editoras">Voltar</a>

        </header>

        <form action="/editoras/<?php echo $DATA["id"]; ?>" method="post">
            <input type="text"  id="<?php echo $DATA["nome"]; ?>" 
                    name="nome" placeholder="Digite o nome do editora" 
                    value="<?php echo $DATA["nome"]; ?>">
            <button type="submit" class="botao_cadastrar">Editar</button>
        </form>
    </div>

    
    
   
    
</body>
</html>