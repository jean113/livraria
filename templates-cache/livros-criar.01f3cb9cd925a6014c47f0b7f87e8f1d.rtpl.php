<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../res/styles/edicao.css">
    <link rel="stylesheet" href="../res/styles/font-awesome/css/font-awesome.min.css">
    <title>Cadastro de Livros</title>
</head>
<body>

    <div class="conteudo">

        <header>

            <h1>Cadastro de Livros</h1>

            <a href="/livros"><i class="fa fa-arrow-left"></i>Voltar</a>

        </header>

        <main>

            <form role="form" action="/livros/criar" method="post">

                <div class="campos">
    
                    <div>
                        <label for="">Título</label>
                        <input type="text" name="titulo"  maxlength="25" required/>
                    </div>
                    
                    <div>
                        <label for="">Autor</label>
                    <select id="autor" name="autor" required>
                        <option value="" disabled selected>Selecione uma opção</option>
                        <?php $counter1=-1;  if( isset($DATA) && ( is_array($DATA) || $DATA instanceof Traversable ) && sizeof($DATA) ) foreach( $DATA as $key1 => $value1 ){ $counter1++; ?>
                            <option value=<?php echo $value1["id"]; ?>><?php echo $value1["nome"]; ?></option>
                        <?php } ?>
                    </select>
                    </div>
                    
                    <div>
                        <label for="">Editora</label>
                        <select id="editora" name="editora" required>
                            <option value="" disabled selected>Selecione uma opção</option>
                            <?php $counter1=-1;  if( isset($DATA2) && ( is_array($DATA2) || $DATA2 instanceof Traversable ) && sizeof($DATA2) ) foreach( $DATA2 as $key1 => $value1 ){ $counter1++; ?>
                                <option value=<?php echo $value1["id"]; ?>><?php echo $value1["nome"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
        
                    <div>
                        <label for="">Data da edição</label>
                        <input type="date" name="dtEdicao" required/>
                    </div>
        
                    <div>
                        <label for="">Páginas</label>
                    <input type="number" name="paginas"/>
        
                    </div>
                    
                    <div>
                        <label for="">Tipo de Impressão</label>
                    <input type="text" name="impressao" maxlength="15"/>
        
                    </div>
                    
        
                    <div>
                        <label for="">Descrição</label>
                        <textarea name="descricao" maxlength="200"></textarea>
        
                    </div>
    
                </div>
    
                <button type="submit" class="botao_cadastrar">Salvar</button>
            </form>

        </main>


        
    </div>

    
</body>
</html>