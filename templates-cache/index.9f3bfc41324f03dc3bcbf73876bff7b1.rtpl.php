<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
    
</head>
<body>

    <p><a href="/painel">Painel</a></p>

    <h1>Seja bem-vindo</h1>

    <?php echo $DATA2; ?> 

    <ol>
        <?php $counter1=-1;  if( isset($DATA) && ( is_array($DATA) || $DATA instanceof Traversable ) && sizeof($DATA) ) foreach( $DATA as $key1 => $value1 ){ $counter1++; ?>
            <li>
                <ul>
                    <li> <b>Livro: </b> <?php echo htmlspecialchars( $value1["livro"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </li>
                    <li> <b>Autor: </b> <?php echo htmlspecialchars( $value1["autor"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </li>
                    <li> <b>Editora: </b><?php echo htmlspecialchars( $value1["editora"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </li>
                </ul>
            </li>
            </br>
        <?php } ?>
    </ol>
    
</body>
</html>