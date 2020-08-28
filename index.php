<?php

require_once("vendor/autoload.php");

use Slim\Slim;

$app = new Slim();
$app->config('debug', false);

require_once("routes/autores.php"); 
require_once("routes/editoras.php"); 


$app->run();

?>
