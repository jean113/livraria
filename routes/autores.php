<?php

require_once("src/model/Pagina.php");
require_once("src/model/BD.php");

$app->get('/autores', function() 
{
    
    $bd = new BD();
    $resultados = $bd->select("SELECT * FROM autor");

    $pagina = new Pagina();
    $pagina->criarPagina("autores", $resultados);
    
});

$app->get('/autores/criar', function() 
{

    $pagina = new Pagina();
    $pagina->criarPagina("autores-criar");

});

$app->post('/autores/criar', function() 
{

    $nome = $_POST["nome"];

    $bd = new BD();
    $bd->query("INSERT INTO autor(nome) VALUES (:NOME)",  array(":NOME" => $nome));

    header("Location: /autores");
    exit;
    
});

$app->get('/autores/:id/apagar', function($id) 
{

    $bd = new BD();
    $bd->query("DELETE FROM autor WHERE id = :ID ",  array(":ID" => $id));

    header("Location: /autores");
    exit;
    
});

//PAGINA EDITAR
$app->get('/autores/:id', function($id) 
{
    
    $bd = new BD();
    $resultados = $bd->select("SELECT * FROM autor WHERE id = :ID", array(":ID" => $id));
    
    
    $pagina = new Pagina();
    $pagina->criarPagina("autores-editar", $resultados[0]);

});

//ROTA ONDE SERÀ FEITA A EDICAO
$app->post('/autores/:id', function($id) 
{
    $nome = $_POST["nome"];

    $bd = new BD();
    $bd->query("UPDATE autor SET nome = :NOME WHERE id = :ID ", 
        array(":NOME"=> $nome,":ID" => $id));

    header("Location: /autores");
    exit;
    
});

?>