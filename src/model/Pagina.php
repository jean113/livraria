<?php

/**
 * Classe responsável por carregar os templates e desenhar as páginas HTML
 */

use Rain\Tpl;

class Pagina
{
    private $tpl;
    
    public function __construct($painel = false)
    {
        //configurações TPL
        $config = array(
            "tpl_dir"       => "templates/", //pasta onde fica os templates
            "cache_dir"     => "templates-cache/", //poasta onde é armazenado o cache
            "auto_escape"   => false, //se passar, tags HTML elas são executadas
            "debug"         => false // colocar falso aumenta a velocidade
        );

        Tpl::configure( $config );

        $this->tpl= new Tpl();

        /*Se o desenvolvedor setar como true, ao desenhar a página, será inserido o header
        e o painel de opções no inicio da página */
        if($painel)
        {
            $this->tpl->draw('header');
            $this->tpl->draw("painel"); 
        }
    }

    /*cria a página podendo passar informações que serão acrescentadas na página*/
    public function criarPagina($nome, $dados = array(), $dados2 = array(), $dados3 = array())
    {
        $this->tpl->assign("DATA", $dados);
        $this->tpl->assign("DATA2", $dados2);
        $this->tpl->assign("DATA3", $dados3);
        
        $this->tpl->draw($nome);

    }
}

?>