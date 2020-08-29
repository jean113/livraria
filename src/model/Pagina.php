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

    public function criarPagina($nome, $dados = array(), $dados2 = array(), $dados3 = array())
    {
        $this->tpl->assign("DATA", $dados);
        $this->tpl->assign("DATA2", $dados2);
        $this->tpl->assign("DATA3", $dados3);
        
        $this->tpl->draw($nome);
    }
}

?>