<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../res/styles/edicao.css">
    <link rel="stylesheet" href="../res/styles/font-awesome/css/font-awesome.min.css">
    <title>Editar Autores</title>
</head>
<body>

    <div class="conteudo">
        
        <header>
            <h1>Editar Autores</h1>

            <a href="/autores"><i class="fa fa-arrow-left"></i>Voltar</a>

        </header>
    
        <form action="/autores/<?php echo $DATA["id"]; ?>" method="post">
            <div class="campos">

                    <div>
                        <label for="">Nome</label>
                        <input type="text"  id="<?php echo $DATA["nome"]; ?>" 
                                name="nome" placeholder="Digite o nome do autor" 
                                value="<?php echo $DATA["nome"]; ?>">   
                    </div>

            </div>
            
            <button type="submit" class="botao_cadastrar">Editar</button>
        </form>
    </div>
    
</body>
</html>