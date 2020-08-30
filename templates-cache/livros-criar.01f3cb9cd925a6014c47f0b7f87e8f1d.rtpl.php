<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../res/styles/edicao.css">
    <title>Cadastro de Livros</title>
</head>
<body>

    <div class="conteudo">

        <header>

            <h1>Cadastro de Livros</h1>

            <a href="/livros">Voltar</a>

        </header>

        <form role="form" action="/livros/criar" method="post">

            <input type="text" name="nome" placeHolder="Nome do livro"/>
    
            <select id="autor" name="autor">
                <option value="" disabled selected>Selecione uma opção</option>
                <?php $counter1=-1;  if( isset($DATA) && ( is_array($DATA) || $DATA instanceof Traversable ) && sizeof($DATA) ) foreach( $DATA as $key1 => $value1 ){ $counter1++; ?>
                    <option value=<?php echo $value1["id"]; ?>><?php echo $value1["nome"]; ?></option>
                <?php } ?>
            </select>
    
            <select id="editora" name="editora">
                <option value="" disabled selected>Selecione uma opção</option>
                <?php $counter1=-1;  if( isset($DATA2) && ( is_array($DATA2) || $DATA2 instanceof Traversable ) && sizeof($DATA2) ) foreach( $DATA2 as $key1 => $value1 ){ $counter1++; ?>
                    <option value=<?php echo $value1["id"]; ?>><?php echo $value1["nome"]; ?></option>
                <?php } ?>
            </select>
    
            <button type="submit" class="botao_cadastrar">Salvar</button>
        </form>


        
    </div>

    

    


    
    
</body>
</html>