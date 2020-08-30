<?php

    require_once("src/model/Pagina.php");
    require_once("src/model/BD.php");

    $app->get('/', function() 
    {
        $bd = new BD();
        $resultados = $bd->select("SELECT l.nome AS livro, a.nome AS autor, e.nome AS editora FROM livro l 
                                    INNER JOIN autor a ON a.id = l.autor_id
                                    INNER JOIN editora e ON e.id = l.editora_id	");

        

        $pagina = new Pagina();
        $pagina->criarPagina("index", $resultados);
        
    });

    $app->get('/painel', function() 
    {
        $pagina = new Pagina();
        $pagina->criarPagina("painel");
        
    });


?>

