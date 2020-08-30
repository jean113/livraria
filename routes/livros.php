<?php

require_once("src/model/Pagina.php");
require_once("src/model/BD.php");

$app->get('/livros', function() 
{
    
    $bd = new BD();
    $resultados = $bd->select("SELECT * FROM livro");

    $pagina = new Pagina(true);
    $pagina->criarPagina("livros", $resultados);
    
});

$app->get('/livros/criar', function() 
{
    $bd = new BD();

    $resultados = $bd->select("SELECT * FROM autor ORDER BY nome");

    $resultados2 = $bd->select("SELECT * FROM editora ORDER BY nome");


    $pagina = new Pagina();
    $pagina->criarPagina("livros-criar",$resultados, $resultados2);

});

$app->post('/livros/criar', function() 
{

    $nome = $_POST["nome"];
    $editora_id = $_POST["editora"];
    $autor_id = $_POST["autor"];
    
    $bd = new BD();

    $bd->query("INSERT INTO livro(nome, editora_id, autor_id) 
                VALUES (:NOME, :EDITORA_ID, :AUTOR_ID)",  
                array(":NOME" => $nome,
                    ":EDITORA_ID" => $editora_id,
                    ":AUTOR_ID" => $autor_id,
            ));

    header("Location: /livros");
    exit;
    
});

$app->get('/livros/:id/apagar', function($id) 
{

    $bd = new BD();
    $bd->query("DELETE FROM livro WHERE id = :ID ",  array(":ID" => $id));

    header("Location: /livros");
    exit;
    
});

//PAGINA EDITAR
$app->get('/livros/:id', function($id) 
{
    
    $bd = new BD();

    $resultados = $bd->select("SELECT * FROM livro WHERE id = :ID", array(":ID" => $id));

    $resultados2 = $bd->select("SELECT * FROM autor");

    $resultados3 = $bd->select("SELECT * FROM editora");
    
    
    $pagina = new Pagina();
    $pagina->criarPagina("livros-editar", $resultados[0], $resultados2 , $resultados3 );

});

//ROTA ONDE SERÀ FEITA A EDICAO
$app->post('/livros/:id', function($id) 
{
    $nome = $_POST["nome"];
    $editora_id = $_POST["editora"];
    $autor_id = $_POST["autor"];

    $bd = new BD();
    $bd->query("UPDATE livro SET nome = :NOME, 
                                 editora_id = :EDITORA_ID, 
                                 autor_id = :AUTOR_ID 
                WHERE id = :ID ", 

        array(":NOME"=> $nome,
            ":EDITORA_ID"=> $editora_id,
            ":AUTOR_ID"=> $autor_id,
            ":ID" => $id));

    header("Location: /livros");
    exit;  
});

?>