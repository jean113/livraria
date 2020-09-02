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

        <main>

            <form action="/autores/<?php echo $DATA["id"]; ?>" method="post">
                <div class="campos">

                        <div>
                            <label for="">Nome</label>
                            <input type="text" 
                                    name="nome"
                                    value="<?php echo $DATA["nome"]; ?>" maxlength="50" required>   
                        </div>

                        <div>
                            <label for="">Telefone</label>
                            <input type="tel" name="telefone" value="<?php echo $DATA["telefone"]; ?>"
                            
                            maxlength="14"/>
                        </div>

                        <div>
                            <label for="">E-mail</label>
                            <input type="email" name="email" value="<?php echo $DATA["email"]; ?>" maxlength="30"/>
                        </div>

                        <div>
                            <label for="">Observação</label>
                            <textarea name="obs" maxlength="100" > <?php echo $DATA["obs"]; ?> </textarea>
            
                        </div>
                    

                </div>
                
                <button type="submit" class="botao_cadastrar">Editar</button>
            </form>

        </main>
    </div>
    
</body>
</html>