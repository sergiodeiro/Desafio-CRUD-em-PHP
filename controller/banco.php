<?php

class Banco
{
    private static $dbNome = '';   // NOME DO BANCO
    private static $dbHost = '';         // NOME DO HOST
    private static $dbUsuario = '';    // NOME DO USUARIO   
    private static $dbSenha = '';     // SENHA
    
    private static $cont = null;
    
    public function __construct() 
    {
        die('A função Init nao é permitido!');
    }
    
    public static function conectar()
    {
        if(null == self::$cont)
        {
            try
            {
                self::$cont =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbNome, self::$dbUsuario, self::$dbSenha); 
            }
            catch(PDOException $exception)
            {
                die($exception->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function desconectar()
    {
        self::$cont = null;
    }
}

?>
