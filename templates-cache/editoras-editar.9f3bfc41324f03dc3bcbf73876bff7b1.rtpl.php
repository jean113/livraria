<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Editoras</title>
</head>
<body>

    <h1>Editar Editoras</h1>
    
    <form action="/editoras/<?php echo htmlspecialchars( $DATA["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
        <input type="text"  id="<?php echo htmlspecialchars( $DATA["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" 
                name="nome" placeholder="Digite o nome do editora" 
                value="<?php echo htmlspecialchars( $DATA["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
        <button type="submit">Editar</button>
    </form>
    
</body>
</html>