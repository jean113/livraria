<?php

    class Modelo
    {
        private $valores = [];

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

        public function setValores($dados = array())
        {
            foreach($dados as $id => $valor)
            {
                $this->{"set".$id}($valor);
            }
        }

        public function getValores()
        {
            return $this->valores;
        }

    }
?>