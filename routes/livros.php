<?php
/**Rotas para cadastros de livros */
require_once("src/model/Pagina.php");
require_once("src/model/Livro.php");
require_once("src/model/Autor.php");
require_once("src/model/Editora.php");

$app->get('/livros', function() //ok
{
    
    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $resultados = Livro::listar();

    $pagina = new Pagina(true);
    $pagina->criarPagina("livros", $resultados);
    
});

$app->get('/livros/criar', function() //ok
{
    
    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $pagina = new Pagina();
    $pagina->criarPagina("livros-criar", Autor::listar(), Editora::listar());

});

$app->post('/livros/criar', function() //ok
{
    

    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    
    $livro = new Livro();

    $livro->setTitulo($_POST["titulo"]);
    $livro->setEditoraID($_POST["editora"]);
    $livro->setAutorID($_POST["autor"]);
    $livro->setDtEdicao($_POST["dtEdicao"]);
    $livro->setPaginas($_POST["paginas"]);
    $livro->setImpressao($_POST["impressao"]);
    $livro->setDescricao($_POST["descricao"]);


    $livro->inserir();


    header("Location: /livros");
    exit;
    
});

$app->get('/livros/:id/apagar', function($id) //opk
{

    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $livro = new Livro();
    $livro->apagar($id);

    header("Location: /livros");
    exit;
    
});

//PAGINA EDITAR
$app->get('/livros/:id', function($id) //ok
{

    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $livro = new Livro();
    $livro->recuperar($id);

    
    
    $pagina = new Pagina();
    $pagina->criarPagina("livros-editar", $livro->getValores(), Autor::listar() , Editora::listar());

});

//ROTA ONDE SERÀ FEITA A EDICAO
$app->post('/livros/:id', function($id) 
{
    
    if (Usuario::verificarSessao() != true)
    {
        header("Location: /login");
        exit;        
    }
    
    $livro = new Livro();
    
    $livro->setTitulo($_POST["titulo"]);
    $livro->setEditoraID($_POST["editora"]);
    $livro->setAutorID($_POST["autor"]);
    $livro->setDtEdicao($_POST["dtEdicao"]);
    $livro->setPaginas($_POST["paginas"]);
    $livro->setImpressao($_POST["impressao"]);
    $livro->setDescricao($_POST["descricao"]);

    $livro->editar($id);

    header("Location: /livros");
    exit;  
});

?>