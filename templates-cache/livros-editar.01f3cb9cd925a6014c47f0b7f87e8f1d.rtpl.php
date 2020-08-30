<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../res/styles/edicao.css">
    <title>Editar Livros</title>
</head>
<body>

    <div class="conteudo">

        <header>

            <h1>Editar Livros</h1>

            <a href="/livros">Voltar</a>

        </header>

        <form action="/livros/<?php echo $DATA["id"]; ?>" method="post">
            <input type="text"  id="<?php echo $DATA["nome"]; ?>" 
                    name="nome" placeholder="Digite o nome do livro" 
                    value="<?php echo $DATA["nome"]; ?>">
    
            <select id="autor" name="autor">
                <?php $counter1=-1;  if( isset($DATA2) && ( is_array($DATA2) || $DATA2 instanceof Traversable ) && sizeof($DATA2) ) foreach( $DATA2 as $key1 => $value1 ){ $counter1++; ?>  
                    <?php if( $DATA["autor_id"] ==  $value1["id"] ){ ?>
                        <option value=<?php echo $value1["id"]; ?> selected><?php echo $value1["nome"]; ?></option>
                    <?php }else{ ?>
                        <option value=<?php echo $value1["id"]; ?> ><?php echo $value1["nome"]; ?></option>
                    <?php } ?>  
                <?php } ?>
            </select>
    
            <select id="editora" name="editora">
                <?php $counter1=-1;  if( isset($DATA3) && ( is_array($DATA3) || $DATA3 instanceof Traversable ) && sizeof($DATA3) ) foreach( $DATA3 as $key1 => $value1 ){ $counter1++; ?>
                    <?php if( $DATA["editora_id"] ==  $value1["id"] ){ ?>
                        <option value=<?php echo $value1["id"]; ?> selected><?php echo $value1["nome"]; ?></option>
                    <?php }else{ ?>
                        <option value=<?php echo $value1["id"]; ?> ><?php echo $value1["nome"]; ?></option>
                    <?php } ?>  
                <?php } ?>
            </select>
    
    
            <button type="submit" class="botao_cadastrar">Editar</button>
    </div>

    
    
    </form>
    
</body>
</html>