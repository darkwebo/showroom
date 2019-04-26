<?php
class Connexion
{
  
   protected function dbconnect()
    {
       try
    {
        $db = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        return $db;  
        
    }
    
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
     
          
    
    
    }
} 
?>
