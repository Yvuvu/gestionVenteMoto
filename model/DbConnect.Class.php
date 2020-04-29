<?php
    class DbConnect
    {
    private $db;

    function __construct(){
        try{
            $this->db = new PDO('mysql:host=localhost;dbname=vente', 'root', '');
        }
        catch(Exception $e){
            die('Erreur'.$e->getMessage());
        }
    }
    
        function getDb() 
        {
         return $this->db;
        }
    
}
?>