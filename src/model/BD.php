<?php
/**
 * Classe responsável por fazer a manipulação direta com o BD
 * Recebe os dados das classes e grava no BD e faz as consultas
 * repassando para as classes
 */
class BD
{
    private $conn;

    const HOSTNAME = "127.0.0.1";
	const USERNAME = "root";
	const PASSWORD = "";
    const DBNAME = "db_livraria";
    
    public function __construct()
    {
        $this->conn = new PDO("mysql:dbname=". BD::DBNAME .";host=".BD::HOSTNAME, BD::USERNAME, BD::PASSWORD);
        
    }

    public function select($consulta, $campos=array()) : array
    {

        $stmt =  $this->conn->prepare($consulta); 

        $this->setarParams($stmt, $campos);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function query($consulta, $campos=array())
    {
        
        $stmt =  $this->conn->prepare($consulta); 

        $this->setarParams($stmt, $campos);
       
        $stmt->execute();

    }

    private function setarParams($consulta, $parametros = array())
	{
        foreach ($parametros as $id => $campo) 
        {
			$this->bindParam($consulta, $id, $campo);
		}
    }
    
    private function bindParam($consulta, $id, $campo)
	{   
        $consulta->bindParam($id, $campo);
	}

}

?>