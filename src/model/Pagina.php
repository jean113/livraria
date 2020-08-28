<?php

use Rain\Tpl;

class Pagina
{
    private $tpl;
    
    public function __construct()
    {
        //configurações TPL
        $config = array(
            "tpl_dir"       => "templates/",
            "cache_dir"     => "templates-cache/",
            "debug"         => false // set to false to improve the speed
        );

        Tpl::configure( $config );

        $this->tpl= new Tpl();
    }

    public function criarPagina($nome, $dados = array())
    {
        $this->tpl->assign("DATA", $dados);
        $this->tpl->draw($nome);
    }
}

?>