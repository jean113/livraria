<?php

    /**
     * Classe genérica - Ela irá adicionar métodos comuns a várias classes
     * do sistems
    */
    class Modelo
    {
        private $valores = [];

        /**
         * Método mágico
         * Toda vez que o objeto chamar um set ou um get, ele criará automaticamente
         * o get e/ou set com os parâmetros.
         * 
         * Ex: livro->setTitulo("titulo"), o método mágico vai criar uma função setTitulo($titulo)
         * que armazena no array privado valores
         */
        public function __call($name, $args)
        {
            $metodo = substr($name,0,3);

            $campo = substr($name,3, strlen($name));

            switch($metodo)
            {
                case "get":
                    return (isset($this->valores[$campo])) ? $this->valores[$campo] : NULL ;
                break;    

                case "set":
                    $this->valores[$campo] = $args[0];
                break;    

            }
        }

        /**
         * Carrega todos os dados de uma vez no objeto
         */
        public function setValores($dados = array())
        {
            foreach($dados as $id => $valor)
            {
                $this->{"set".$id}($valor);
            }
        }

        /**
         * Retorna todos os dados armazenados do objeto
         */
        public function getValores()
        {
            return $this->valores;
        }

    }
?>