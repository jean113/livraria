<?php

/**
 * Classe que fica entre a view e o BD.
 * Recebe os dados passados pelo usuário e grava no banco
 */
    require_once("Modelo.php");
    require_once("BD.php");

    class Autor extends Modelo
    {
        public static function listar():array
        {
            $bd = new BD();
            return $bd->select("SELECT * FROM autor");
        }

        public function inserir()
        {
            $bd = new BD();
          
            try
            {
                $bd->query("INSERT INTO autor(nome, telefone, email, obs) VALUES (:NOME, :TELEFONE, :EMAIL, :OBS)",  
                    array(":NOME" => $this->getNome(),
                          ":TELEFONE" => $this->getTelefone(),
                          ":EMAIL" => $this->getEmail(),
                          ":OBS" => $this->getObs()
                ));
            }
            catch (Exception $e) {

                var_dump(array(
                    "message"=>$e->getMessage(),
                    "line"=>$e->getLine(),
                    "file"=>$e->getFile(),
                    "code"=>$e->getCode()
                ));

                die("Erro ao inserir autor");
            }
            
        }

        
    

        public function apagar($id)
        {
            $bd = new BD();
            try
            {
                $bd->query("DELETE FROM autor WHERE id = :ID ",  array(":ID" => $id ));
            }
            catch (Exception $e) {

                var_dump(array(
                    "message"=>$e->getMessage(),
                    "line"=>$e->getLine(),
                    "file"=>$e->getFile(),
                    "code"=>$e->getCode()
                ));

                die("Erro ao apagar autor");
            }
            
        }

        public function recuperar($id)
        {
            $bd = new BD();
            
            try
            {
                $resultados =  $bd->select("SELECT * FROM autor WHERE id = :ID", array(":ID" => $id));

                $this->setValores($resultados[0]);
                
            }
            catch (Exception $e) {

                var_dump(array(
                    "message"=>$e->getMessage(),
                    "line"=>$e->getLine(),
                    "file"=>$e->getFile(),
                    "code"=>$e->getCode()
                ));

                die("Erro ao recuperar autor");
            }
        }

        public function editar($id)
        {

            $bd = new BD();
            
            try
            {
                $bd->query("UPDATE autor SET nome = :NOME, telefone = :TELEFONE, email = :EMAIL, obs = :OBS WHERE id = :ID ", 
                        array(":NOME"=> $this->getNome(),
                        ":TELEFONE" => $this->getTelefone(),
                        ":EMAIL" => $this->getEmail(),
                        ":OBS" => $this->getObs(),
                        ":ID" => $id));
                
            }
            catch (Exception $e) {

                var_dump(array(
                    "message"=>$e->getMessage(),
                    "line"=>$e->getLine(),
                    "file"=>$e->getFile(),
                    "code"=>$e->getCode()
                ));

                die("Erro ao editar autor");
            }
        }
    }
?>