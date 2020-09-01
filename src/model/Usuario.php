<?php

    require_once("Modelo.php");
    require_once("BD.php");


    class Usuario extends Modelo
    {
        const SESSION = "Usuario";

        public static function login($login, $senha)
        {
            $bd = new BD();
            $resultado = $bd->select("SELECT * FROM admin WHERE login = :LOGIN", array(
                ":LOGIN" => $login
            ));

            if (count($resultado) === 0)
                return false;

            $dado = $resultado[0];

            
            
            if ( md5($senha) === $dado["senha"] )
            {
                
                $_SESSION[Usuario::SESSION] = $dado;

                return true;
            }
            else
            {
                return false;
 
            }
        }
        
      
        //verifica se a sessão do administrador existe
        public static function verificarSessao()
        {
            
            
            if ((!isset($_SESSION[Usuario::SESSION])) || (!$_SESSION[Usuario::SESSION]))
               
            {
               return false;
            }
            else
            {
                
                return true;

            }
        }

        public static function logout()
        { 
            unset($_SESSION[Usuario::SESSION]);
        } 
    }
?>