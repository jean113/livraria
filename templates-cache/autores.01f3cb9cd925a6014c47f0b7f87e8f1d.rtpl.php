<?php if(!class_exists('Rain\Tpl')){exit;}?>


    <div class="conteudo">
      <header>
        <h1>Autores</h1>
        <a href="/autores/criar" class="botao_cadastrar">Adicionar</a>
      </header>
      <main>

        <?php if( $DATA ){ ?>
          <table>
              <thead>
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nome </th>
                  <th>Telefone</th>
                </tr>
              </thead>
              <tbody>
                <?php $counter1=-1;  if( isset($DATA) && ( is_array($DATA) || $DATA instanceof Traversable ) && sizeof($DATA) ) foreach( $DATA as $key1 => $value1 ){ $counter1++; ?>
              
                <tr>
                  <td><?php echo $value1["id"]; ?></td>
                  <td><?php echo $value1["nome"]; ?></td>
                  <td><?php echo $value1["telefone"]; ?></td>
                  <td>

                    <a href="/autores/<?php echo $value1["id"]; ?>" class="botao_cadastrar"> <i class="fa fa-edit fa-lg"></i> </a>
                    
                    <a href="/autores/<?php echo $value1["id"]; ?>/apagar" class="botao_excluir" 
                      onclick="return confirm('Deseja realmente excluir este registro?')">  
                        
                        <i class="fa fa-trash-o fa-lg"></i>  
                    </a>

                  </td>
      
                </tr>

                <?php } ?>
              </tbody>
            </table>
          <?php } ?>

      </main>
     
        
    </div>
    
</body>
</html>