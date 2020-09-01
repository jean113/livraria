<?php

    require_once("src/model/Pagina.php");
    require_once("src/model/Usuario.php");
    
    $app->get('/login', function() 
    {
        $pagina = new Pagina();
        $pagina->criarPagina("login");
        
    });

    $app->post('/login', function() 
    {
        
        if (Usuario::login($_POST['login'], $_POST['senha']) === true)
        {
            header("Location: /livros");
            exit;   
        }
        else
        {
            $pagina = new Pagina();
            $pagina->criarPagina("login", "erro");   
        }
        
    });

    $app->get('/logout', function() 
    {
        Usuario::logout();
        header("Location: /");
        exit;
    });


?>