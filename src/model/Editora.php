<?php
/**
 * Classe que fica entre a view e o BD.
 * Recebe os dados passados pelo usuário e grava no banco
 */
    require_once("Modelo.php");
    require_once("BD.php");

    class Editora extends Modelo
    {
        public static function listar():array
        {
            $bd = new BD();
            return $bd->select("SELECT * FROM editora");
        }

        public function inserir()
        {
            $bd = new BD();
            try
            {
                $bd->query("INSERT INTO editora(nome, email, telefone, obs) VALUES (:NOME, :EMAIL, :TELEFONE, :OBS)",  
                    array(":NOME" => $this->getNome(),
                          ":EMAIL" => $this->getEmail(),
                          ":TELEFONE" => $this->getTelefone(),
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

                die("Erro ao inserir editora");
            }
            
        }

        
    

        public function apagar($id)
        {
            $bd = new BD();
            try
            {
                $bd->query("DELETE FROM editora WHERE id = :ID ",  array(":ID" => $id ));
            }
            catch (Exception $e) {

                var_dump(array(
                    "message"=>$e->getMessage(),
                    "line"=>$e->getLine(),
                    "file"=>$e->getFile(),
                    "code"=>$e->getCode()
                ));

                die("Erro ao apagar editora");
            }
            
        }

        public function recuperar($id)
        {
            $bd = new BD();
            
            try
            {
                $resultados =  $bd->select("SELECT * FROM editora WHERE id = :ID", array(":ID" => $id));

                $this->setValores($resultados[0]);
                
            }
            catch (Exception $e) {

                var_dump(array(
                    "message"=>$e->getMessage(),
                    "line"=>$e->getLine(),
                    "file"=>$e->getFile(),
                    "code"=>$e->getCode()
                ));

                die("Erro ao recuperar editora");
            }
        }

        public function editar($id)
        {

            $bd = new BD();
            
            try
            {
                $bd->query("UPDATE editora SET nome = :NOME, email = :EMAIL, telefone = :TELEFONE, obs = :OBS WHERE id = :ID ", 
                        array(":NOME"=> $this->getNome(),
                        ":EMAIL"=> $this->getEmail(),
                        ":TELEFONE"=> $this->getTelefone(),
                        ":OBS"=> $this->getObs(),
                        ":ID" => $id));
                
            }
            catch (Exception $e) {

                var_dump(array(
                    "message"=>$e->getMessage(),
                    "line"=>$e->getLine(),
                    "file"=>$e->getFile(),
                    "code"=>$e->getCode()
                ));

                die("Erro ao editar editora");
            }
        }
    }
?>