<?php

require_once("src/model/Pagina.php");
require_once("src/model/Autor.php");

$app->get('/autores', function()
{
    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }


    $resultados = Autor::listar();
    
    $pagina = new Pagina(true);
    $pagina->criarPagina("autores", $resultados);
    
});

$app->get('/autores/criar', function()
{

    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }

    $pagina = new Pagina();
    $pagina->criarPagina("autores-criar");

});

$app->post('/autores/criar', function() 
{

    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $autor = new Autor();
    $autor->setNome($_POST["nome"]);

    $autor->inserir();
    
    header("Location: /autores");
    exit;
    
});

$app->get('/autores/:id/apagar', function($id) 
{
    
    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $autor = new Autor();
    $autor->apagar($id);

    header("Location: /autores");
    exit;
    
});

//PAGINA EDITAR
$app->get('/autores/:id', function($id) 
{
    
    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    
    $autor = new Autor();
    $autor->recuperar($id);
    
    $pagina = new Pagina();
    $pagina->criarPagina("autores-editar", $autor->getValores());

});

//ROTA ONDE SERÀ FEITA A EDICAO
$app->post('/autores/:id', function($id) 
{

    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $autor = new Autor();
    $autor->setNome($_POST["nome"]);

    $autor->editar($id);


    header("Location: /autores");
    exit;
    
});

?>