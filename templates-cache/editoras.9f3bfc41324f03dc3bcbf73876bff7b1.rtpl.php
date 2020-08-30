<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Editoras</title>
</head>
<body>

    <h1>Visualizar de Editoras</h1>

    <a href="/painel">Voltar</a>

    <div>
        <a href="/editoras/criar">Adicionar editora</a>
        <table>
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nome </th>
                <th style="width: 140px">&nbsp;</th>
              </tr>
            </thead>
            <tbody>
              <?php $counter1=-1;  if( isset($DATA) && ( is_array($DATA) || $DATA instanceof Traversable ) && sizeof($DATA) ) foreach( $DATA as $key1 => $value1 ){ $counter1++; ?>
              <tr>
                <td><?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                <td>
                  <a href="/editoras/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" > Editar</a>
                  <a href="/editoras/<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/apagar" onclick="return confirm('Deseja realmente excluir este registro?')"> Excluir</a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
    </div>
    
</body>
</html>