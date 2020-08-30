<?php

    require_once("Modelo.php");
    require_once("BD.php");

    class Livro extends Modelo
    {
        public static function livraria():array
        {
            $bd = new BD();
            
            return $bd->select("SELECT l.nome AS livro, a.nome AS autor, e.nome AS editora FROM livro l 
                                INNER JOIN autor a ON a.id = l.autor_id
                                INNER JOIN editora e ON e.id = l.editora_id	");
        }

        public static function listar():array
        {
            $bd = new BD();
            return $bd->select("SELECT * FROM livro");
        }

        public function inserir()
        {

            $bd = new BD();
            try
            {
                $bd->query("INSERT INTO livro(nome, editora_id, autor_id) 
                VALUES (:NOME, :EDITORA_ID, :AUTOR_ID)",  
                array(":NOME" => $this->getNome(),
                    ":EDITORA_ID" => $this->getEditoraID(),
                    ":AUTOR_ID" => $this->getAutorID(),
                ));
            }
            catch (Exception $e) {

                var_dump(array(
                    "message"=>$e->getMessage(),
                    "line"=>$e->getLine(),
                    "file"=>$e->getFile(),
                    "code"=>$e->getCode()
                ));

                die("Erro ao inserir livro");
            }
            
        }

        public function apagar($id)
        {
            $bd = new BD();
            try
            {
                $bd->query("DELETE FROM livro WHERE id = :ID ",  array(":ID" => $id ));
            }
            catch (Exception $e) {

                var_dump(array(
                    "message"=>$e->getMessage(),
                    "line"=>$e->getLine(),
                    "file"=>$e->getFile(),
                    "code"=>$e->getCode()
                ));

                die("Erro ao apagar livro");
            }
            
        }

        public function recuperar($id)
        {
            $bd = new BD();
            
            try
            {
                $resultados =  $bd->select("SELECT * FROM livro WHERE id = :ID", array(":ID" => $id));

                $this->setValores($resultados[0]);
                
            }
            catch (Exception $e) {

                var_dump(array(
                    "message"=>$e->getMessage(),
                    "line"=>$e->getLine(),
                    "file"=>$e->getFile(),
                    "code"=>$e->getCode()
                ));

                die("Erro ao recuperar livro");
            }
        }

        public function editar($id)
        {

            $bd = new BD();

                   
            try
            {
                $bd->query("UPDATE livro SET nome = :NOME, editora_id = :EDITORA_ID, autor_id = :AUTOR_ID 
                            WHERE id = :ID ",  array(
                                ":NOME"=> $this->getNome(),
                                ":EDITORA_ID"=>  $this->getEditoraID(),
                                ":AUTOR_ID"=> $this->getAutorID(),
                                ":ID" => $id));
                
            }
            catch (Exception $e) {

                var_dump(array(
                    "message"=>$e->getMessage(),
                    "line"=>$e->getLine(),
                    "file"=>$e->getFile(),
                    "code"=>$e->getCode()
                ));

                die("Erro ao editar livro");
            }
        }
    }
?>