<?php

require_once("vendor/autoload.php");

use Rain\Tpl;

//configurações TPL
$config = array(
    "tpl_dir"       => "templates/",
    "cache_dir"     => "templates-cache/",
    "debug"         => false, // set to false to improve the speed
);
Tpl::configure( $config );

$app->get('/', function() 
{
    // create the Tpl object
    $tpl = new Tpl();

    //SQL
    $conn = new PDO("mysql:dbname=db_livraria;host=localhost", "root", "");

    $stmt = $conn->prepare("SELECT * FROM autor;");

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $tpl->assign('DATA' , $results);
    $tpl->draw( "autores" );
});

$app->get('/criar', function() 
{
    // create the Tpl object
    $tpl = new Tpl();
    $tpl->draw( "autores-criar" );
});

$app->post('/criar', function() 
{

    $nome = $_POST["nome"];

    $conn = new PDO("mysql:dbname=db_livraria;host=localhost", "root", "");

    $stmt = $conn->prepare("INSERT INTO autor(nome) VALUES (:NOME)");
    $stmt->bindParam(":NOME", $nome);

    $stmt->execute();

    header("Location: /");
    exit;
    
});

$app->get('/apagar/:id', function($id) 
{

    $conn = new PDO("mysql:dbname=db_livraria;host=localhost", "root", "");

    $stmt = $conn->prepare("DELETE FROM autor WHERE id = :ID ");
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    header("Location: /");
    exit;
    
});

//PAGINA EDITAR
$app->get('/editar/:id', function($id) 
{
    // create the Tpl object
    $tpl = new Tpl();

    //SQL
    $conn = new PDO("mysql:dbname=db_livraria;host=localhost", "root", "");

    $stmt = $conn->prepare("SELECT * FROM autor WHERE id = :ID");

    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $tpl->assign('DATA' , $results[0]);

    $tpl->draw( "autores-editar" );
    
});

//ROTA ONDE SERÀ FEITA A EDICAO
$app->post('/editar/:id', function($id) 
{
    $nome = $_POST["nome"];

    $conn = new PDO("mysql:dbname=db_livraria;host=localhost", "root", "");

    $stmt = $conn->prepare("UPDATE autor SET nome = :NOME WHERE id = :ID ");

    $stmt->bindParam(":NOME", $nome);
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    header("Location: /");
    exit;
    
});

?>