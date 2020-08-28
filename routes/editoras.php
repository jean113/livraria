<?php

require_once("src/model/Pagina.php");
require_once("src/model/BD.php");

$app->get('/editoras', function() 
{
    
    $bd = new BD();
    $resultados = $bd->select("SELECT * FROM editora");

    $pagina = new Pagina();
    $pagina->criarPagina("editoras", $resultados);
    
});

$app->get('/editoras/criar', function() 
{

    $pagina = new Pagina();
    $pagina->criarPagina("editoras-criar");

});

$app->post('/editoras/criar', function() 
{

    $nome = $_POST["nome"];

    $bd = new BD();
    $bd->query("INSERT INTO editora(nome) VALUES (:NOME)",  array(":NOME" => $nome));

    header("Location: /editoras");
    exit;
    
});

$app->get('/editoras/:id/apagar', function($id) 
{

    $bd = new BD();
    $bd->query("DELETE FROM editora WHERE id = :ID ",  array(":ID" => $id));

    header("Location: /editoras");
    exit;
    
});

//PAGINA EDITAR
$app->get('/editoras/:id', function($id) 
{
    
    $bd = new BD();
    $resultados = $bd->select("SELECT * FROM editora WHERE id = :ID", array(":ID" => $id));
    
    
    $pagina = new Pagina();
    $pagina->criarPagina("editoras-editar", $resultados[0]);

});

//ROTA ONDE SERÀ FEITA A EDICAO
$app->post('/editoras/:id', function($id) 
{
    $nome = $_POST["nome"];

    $bd = new BD();
    $bd->query("UPDATE editora SET nome = :NOME WHERE id = :ID ", 
        array(":NOME"=> $nome,":ID" => $id));

    header("Location: /editoras");
    exit;
    
});

?>