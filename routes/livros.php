<?php

require_once("src/model/Pagina.php");
require_once("src/model/Livro.php");
require_once("src/model/Autor.php");
require_once("src/model/Editora.php");

$app->get('/livros', function() //ok
{
    
    $resultados = Livro::listar();

    $pagina = new Pagina(true);
    $pagina->criarPagina("livros", $resultados);
    
});

$app->get('/livros/criar', function() //ok
{
    $pagina = new Pagina();
    $pagina->criarPagina("livros-criar", Autor::listar(), Editora::listar());

});

$app->post('/livros/criar', function() //ok
{

    $livro = new Livro();

    $livro->setNome($_POST["nome"]);
    $livro->setEditoraID($_POST["editora"]);
    $livro->setAutorID($_POST["autor"]);

    $livro->inserir();

    header("Location: /livros");
    exit;
    
});

$app->get('/livros/:id/apagar', function($id) //opk
{

    $livro = new Livro();
    $livro->apagar($id);

    header("Location: /livros");
    exit;
    
});

//PAGINA EDITAR
$app->get('/livros/:id', function($id) //ok
{

    $livro = new Livro();
    $livro->recuperar($id);
    
    $pagina = new Pagina();
    $pagina->criarPagina("livros-editar", $livro->getValores(), Autor::listar() , Editora::listar());

});

//ROTA ONDE SERÀ FEITA A EDICAO
$app->post('/livros/:id', function($id) 
{
    $livro = new Livro();
    
    $livro->setNome($_POST["nome"]);
    $livro->setEditoraID($_POST["editora"]);
    $livro->setAutorID($_POST["autor"]);

    $livro->editar($id);

    header("Location: /livros");
    exit;  
});

?>