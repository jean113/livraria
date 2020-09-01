<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
        <link rel="stylesheet" href="../res/styles/site.css">
        <link rel="stylesheet" href="../res/styles/font-awesome/css/font-awesome.min.css">
    </head>
<body>

    
    <div class="conteudo">

        <header>
            

            <h1>Seja bem-vindo</h1>

            <a href="/login"> <i class="fa fa-sign-in"> </i>Login</a>
        </header>

       

        <ul>
            <?php $counter1=-1;  if( isset($DATA) && ( is_array($DATA) || $DATA instanceof Traversable ) && sizeof($DATA) ) foreach( $DATA as $key1 => $value1 ){ $counter1++; ?>
                <li>
                    
                    <b>Livro: </b> <?php echo $value1["titulo"]; ?> <br/>
                    <b>Autor: </b> <?php echo $value1["autor"]; ?>  <br/>
                    <b>Editora: </b><?php echo $value1["editora"]; ?> <br/>
                    <b>Data de edição: </b><?php echo $value1["dt_edicao"]; ?> <br/>
                    <?php if( $value1["paginas"] ){ ?>
                        <b>Páginas: </b> <?php echo $value1["paginas"]; ?> <br/>
                    <?php } ?>    
                    <?php if( $value1["impressao"] ){ ?>
                        <b>Tipo de impressão: </b> <?php echo $value1["impressao"]; ?>  <br/>
                    <?php } ?>  
                    <?php if( $value1["descricao"] ){ ?>
                        <b>Descrição: </b><?php echo $value1["descricao"]; ?> <br/>
                    <?php } ?>
                            
                </li>
            <?php } ?>
        </ul>



    </div>
</body>
</html>