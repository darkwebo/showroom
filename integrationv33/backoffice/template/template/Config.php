<?php
class Config{
	private static $instance = NULL;
	public static function getConnexion()
	{
		if(!isset(self::$instance))
		{
            $dsn = 'mysql:dbname=database;host=localhost';
            $user = 'root';
            $password = '';

            try {
                self::$instance = new PDO($dsn, $user, $password);
            } 
            catch (PDOException $e) {
                echo 'Connexion échouée :'.$e->getMessage();
            }
	    }
	    return self::$instance;
	}
}
?>