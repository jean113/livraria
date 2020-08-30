<?php if(!class_exists('Rain\Tpl')){exit;}?>

    <div class="conteudo">
        <h1> Livros</h1>
        <a href="/livros/criar" class="botao_cadastrar">Adicionar</a>
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
                <td><?php echo $value1["id"]; ?></td>
                <td><?php echo $value1["nome"]; ?></td>
                <td>
                  <div>
                    
                    <a href="/livros/<?php echo $value1["id"]; ?>" class="botao_cadastrar"> <i class="fa fa-edit fa-lg"></i> </a>
                    
                    <a href="/livros/<?php echo $value1["id"]; ?>/apagar" class="botao_excluir" 
                        onclick="return confirm('Deseja realmente excluir este registro?')">  
                        <i class="fa fa-trash-o fa-lg"></i>
                      
                    </a>


                  </div> 
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
    </div>
    
</body>
</html>