<?php
/**
 * Classe que fica entre a view e o BD.
 * Recebe os dados passados pelo usuário e grava no banco
 */
    require_once("Modelo.php");
    require_once("BD.php");

    class Livro extends Modelo
    {
        public static function listar():array
        {
            $bd = new BD();
            
            return $bd->select("SELECT l.id, l.titulo, DATE_FORMAT(l.dt_edicao,'%d/%m/%Y') as dt_edicao, 
                                l.paginas, l.impressao, l.descricao,
                                a.nome AS autor, e.nome AS editora FROM livro l 
                                INNER JOIN autor a ON a.id = l.autor_id
                                INNER JOIN editora e ON e.id = l.editora_id	");
        }

        public function inserir()
        {
           

            $bd = new BD();

            try
            {
               
                $bd->query("INSERT INTO livro(titulo, editora_id, autor_id, dt_edicao, paginas, impressao, descricao) 
                VALUES (:TITULO, :EDITORA_ID, :AUTOR_ID, :DT_EDICAO, :PAGINAS,:IMPRESSAO, :DESCRICAO)",  

                array(":TITULO" => $this->getTitulo(),
                    ":EDITORA_ID" => $this->getEditoraID(),
                    ":AUTOR_ID" => $this->getAutorID(),
                    ":DT_EDICAO" =>  date($this->getDtEdicao()) ,
                    ":PAGINAS" => (int)$this->getPaginas(),
                    ":IMPRESSAO" => $this->getImpressao(),
                    ":DESCRICAO" => $this->getDescricao()
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
                $resultados =  $bd->select("SELECT id, editora_id, autor_id,titulo, 
                                        DATE_FORMAT(dt_edicao,'%Y-%m-%d') as dt_edicao, 
                                        paginas, impressao, descricao
                     
                 FROM livro WHERE id = :ID", array(":ID" => $id));

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
                $bd->query("UPDATE livro SET titulo = :TITULO, editora_id = :EDITORA_ID, autor_id = :AUTOR_ID, 
                                             dt_edicao = :DT_EDICAO, paginas = :PAGINAS, impressao = :IMPRESSAO,
                                             descricao = :DESCRICAO
                            WHERE id = :ID ", 

                                array(":TITULO" => $this->getTitulo(),
                                    ":EDITORA_ID" => $this->getEditoraID(),
                                    ":AUTOR_ID" => $this->getAutorID(),
                                    ":DT_EDICAO" =>  date($this->getDtEdicao()) ,
                                    ":PAGINAS" =>(int) $this->getPaginas(),
                                    ":IMPRESSAO" => $this->getImpressao(),
                                    ":DESCRICAO" => $this->getDescricao(),
                                    ":ID" => $id) );             
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