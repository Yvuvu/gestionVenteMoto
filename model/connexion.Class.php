<?php
class Connection
{
    private $connexion;
    public function __construct()
    {    
        try
        {
            $connexion = new PDO ('mysql:host=localhost; dbname=vente','root','');
        }
        catch(Exception $e)
        {
            die('Erreur'.$e->getMessage());
        }
    }
    public function getConnexion()
     {
         return $this->connexion;
     }
}
?> 