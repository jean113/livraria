<?php

require_once("src/model/Pagina.php");
require_once("src/model/Editora.php");

$app->get('/editoras', function() 
{
    
    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $resultados = Editora::listar();

    $pagina = new Pagina(true);
    $pagina->criarPagina("editoras", $resultados);
    
});

$app->get('/editoras/criar', function() 
{

    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $pagina = new Pagina();
    $pagina->criarPagina("editoras-criar");

});

$app->post('/editoras/criar', function() 
{

    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $editora = new Editora();
    $editora->setNome($_POST["nome"]);

    $editora->inserir();


    header("Location: /editoras");
    exit;
    
});

$app->get('/editoras/:id/apagar', function($id) 
{

    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $editora = new Editora();
    $editora->apagar($id);

    header("Location: /editoras");
    exit;
    
});

//PAGINA EDITAR
$app->get('/editoras/:id', function($id) 
{
    
    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $editora = new Editora();
    $editora->recuperar($id);
    
    
    $pagina = new Pagina();
    $pagina->criarPagina("editoras-editar", $editora->getValores());

});

//ROTA ONDE SERÀ FEITA A EDICAO
$app->post('/editoras/:id', function($id) 
{
    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $editora = new Editora();
    $editora->setNome($_POST["nome"]);

    $editora->editar($id);

    header("Location: /editoras");
    exit;
    
});

?>