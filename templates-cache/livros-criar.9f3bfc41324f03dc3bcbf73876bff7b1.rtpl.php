<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
</head>
<body>

    <h1>Cadastro de Livros</h1>

    <a href="/livros">Voltar</a>

    <form role="form" action="/livros/criar" method="post">

        <input type="text" name="nome" placeHolder="Nome do livro"/>

        <select id="autor" name="autor">
            <?php $counter1=-1;  if( isset($DATA) && ( is_array($DATA) || $DATA instanceof Traversable ) && sizeof($DATA) ) foreach( $DATA as $key1 => $value1 ){ $counter1++; ?>
                <option value=<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
            <?php } ?>
        </select>

        <select id="editora" name="editora">
            <?php $counter1=-1;  if( isset($DATA2) && ( is_array($DATA2) || $DATA2 instanceof Traversable ) && sizeof($DATA2) ) foreach( $DATA2 as $key1 => $value1 ){ $counter1++; ?>
                <option value=<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
            <?php } ?>
        </select>

        <button type="submit">Salvar</button>
    </form>

    

    
    
</body>
</html>