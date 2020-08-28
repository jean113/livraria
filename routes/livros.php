<?php

require_once("src/model/Pagina.php");
require_once("src/model/BD.php");

$app->get('/livros', function() 
{
    
    $bd = new BD();
    $resultados = $bd->select("SELECT * FROM livro");

    $pagina = new Pagina();
    $pagina->criarPagina("livros", $resultados);
    
});

$app->get('/livros/criar', function() 
{

    $pagina = new Pagina();
    $pagina->criarPagina("livros-criar");

});

$app->post('/livros/criar', function() 
{

    $nome = $_POST["nome"];

    $bd = new BD();
    $bd->query("INSERT INTO livro(nome) VALUES (:NOME)",  array(":NOME" => $nome));

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
    
    
    $pagina = new Pagina();
    $pagina->criarPagina("livros-editar", $resultados[0]);

});

//ROTA ONDE SERÀ FEITA A EDICAO
$app->post('/livros/:id', function($id) 
{
    $nome = $_POST["nome"];

    $bd = new BD();
    $bd->query("UPDATE livro SET nome = :NOME WHERE id = :ID ", 
        array(":NOME"=> $nome,":ID" => $id));

    header("Location: /livros");
    exit;
    
});

?>