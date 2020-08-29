<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livros</title>
</head>
<body>

    <h1>Editar Livros</h1>
    
    <form action="/livros/<?php echo htmlspecialchars( $DATA["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
        <input type="text"  id="<?php echo htmlspecialchars( $DATA["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" 
                name="nome" placeholder="Digite o nome do livro" 
                value="<?php echo htmlspecialchars( $DATA["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

        <select id="autor" name="autor">
            <?php $counter1=-1;  if( isset($DATA2) && ( is_array($DATA2) || $DATA2 instanceof Traversable ) && sizeof($DATA2) ) foreach( $DATA2 as $key1 => $value1 ){ $counter1++; ?>  
                <?php if( $DATA["autor_id"] ==  $value1["id"] ){ ?>
                    <option value=<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?> selected><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                <?php }else{ ?>
                    <option value=<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?> ><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                <?php } ?>  
            <?php } ?>
        </select>

        <select id="editora" name="editora">
            <?php $counter1=-1;  if( isset($DATA3) && ( is_array($DATA3) || $DATA3 instanceof Traversable ) && sizeof($DATA3) ) foreach( $DATA3 as $key1 => $value1 ){ $counter1++; ?>
                <?php if( $DATA["editora_id"] ==  $value1["id"] ){ ?>
                    <option value=<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?> selected><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                <?php }else{ ?>
                    <option value=<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?> ><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                <?php } ?>  
            <?php } ?>
        </select>


        <button type="submit">Editar</button>
    </form>
    
</body>
</html>