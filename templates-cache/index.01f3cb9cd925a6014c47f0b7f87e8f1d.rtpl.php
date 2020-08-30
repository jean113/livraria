<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
        <link rel="stylesheet" href="../res/styles/site.css">
    </head>
<body>

    
    <div class="conteudo">

        <header>
            

            <h1>Seja bem-vindo</h1>

            <a href="/livros">Painel</a>
        </header>

       

        <ul>
            <?php $counter1=-1;  if( isset($DATA) && ( is_array($DATA) || $DATA instanceof Traversable ) && sizeof($DATA) ) foreach( $DATA as $key1 => $value1 ){ $counter1++; ?>
                <li>
                    
                    <b>Livro: </b> <?php echo $value1["livro"]; ?> <br/>
                    <b>Autor: </b> <?php echo $value1["autor"]; ?>  <br/>
                    <b>Editora: </b><?php echo $value1["editora"]; ?> <br/>
                   
                </li>
            <?php } ?>
        </ul>



    </div>
</body>
</html>