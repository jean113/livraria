<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../res/styles/edicao.css">
    <link rel="stylesheet" href="../res/styles/font-awesome/css/font-awesome.min.css">
    <title>Editar Livros</title>
</head>
<body>

    <div class="conteudo">

        <header>

            <h1>Editar Livros</h1>

            <a href="/livros"><i class="fa fa-arrow-left"></i>Voltar</a>

        </header>

        <main>

            <form action="/livros/<?php echo $DATA["id"]; ?>" method="post">

                <div class="campos">
     
                     <div>
     
                         <label for="">Título</label>
                         <input type="text"  id="<?php echo $DATA["titulo"]; ?>" 
                                 name="titulo" 
                                 value="<?php echo $DATA["titulo"]; ?>" required>
     
                     </div>
     
                     <div>
     
                         <label for="">Autor</label>
                         <select id="autor" name="autor" required>
                             <?php $counter1=-1;  if( isset($DATA2) && ( is_array($DATA2) || $DATA2 instanceof Traversable ) && sizeof($DATA2) ) foreach( $DATA2 as $key1 => $value1 ){ $counter1++; ?>  
                                 <?php if( $DATA["autor_id"] ==  $value1["id"] ){ ?>
                                     <option value=<?php echo $value1["id"]; ?> selected><?php echo $value1["nome"]; ?></option>
                                 <?php }else{ ?>
                                     <option value=<?php echo $value1["id"]; ?> ><?php echo $value1["nome"]; ?></option>
                                 <?php } ?>  
                             <?php } ?>
                         </select>
     
                     </div>
     
                     <div>
     
                         <label for="">Editora</label>
                         <select id="editora" name="editora" required>
                             <?php $counter1=-1;  if( isset($DATA3) && ( is_array($DATA3) || $DATA3 instanceof Traversable ) && sizeof($DATA3) ) foreach( $DATA3 as $key1 => $value1 ){ $counter1++; ?>
                                 <?php if( $DATA["editora_id"] ==  $value1["id"] ){ ?>
                                     <option value=<?php echo $value1["id"]; ?> selected><?php echo $value1["nome"]; ?></option>
                                 <?php }else{ ?>
                                     <option value=<?php echo $value1["id"]; ?> ><?php echo $value1["nome"]; ?></option>
                                 <?php } ?>  
                             <?php } ?>
                         </select>
     
                     </div>
     
     
                     <div>
     
                         <label for="">Data da edição</label>
                         <input value="<?php echo $DATA["dt_edicao"]; ?>" type="date" name="dtEdicao" required/>
     
                     </div>
         
                 
                     <div>
     
                         <label for="">Páginas</label>
                         <input value="<?php echo $DATA["paginas"]; ?>" type="number" name="paginas" />
     
                     </div>
     
                     <div>
     
                         <label for="">Tipo de Impressão</label>
                         <input value="<?php echo $DATA["impressao"]; ?>" type="text" name="impressao" maxlength="15"/>
     
                     </div>
     
                     <div>
     
                         <label for="">Descrição</label>
                         <textarea name="descricao" maxlength="200"> <?php echo $DATA["descricao"]; ?> </textarea>
     
     
                     </div>
                 
     
                   
                </div>
         
                 <button type="submit" class="botao_cadastrar">Editar</button>
         
     
            </form>

        </main>

        

    </div>
    
</body>
</html>