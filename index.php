<?php
/**Aqui está ativando a sessão para quando o usuário logar e
 * anexando todas as rotas do site
 */
session_start();
require_once("vendor/autoload.php");

use Slim\Slim;

$app = new Slim();
$app->config('debug', false);


require_once("routes/site.php"); 
require_once("routes/login.php");
require_once("routes/autores.php"); 
require_once("routes/editoras.php"); 
require_once("routes/livros.php"); 


$app->run();

?>
