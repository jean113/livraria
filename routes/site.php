<?php
/**Rotas para o ínicio do site, para visualização dos livros */
    require_once("src/model/Pagina.php");
    require_once("src/model/Livro.php");

    $app->get('/', function() 
    {

        $resultados = Livro::listar();
        $pagina = new Pagina();
        $pagina->criarPagina("index", $resultados);
        
    });

?>

