<?php
    include('../model/connexion.Class.php');
    include('../model/model.Class.php');    
    include('../model/moto.Class.php');
class Connect
{
     private $db;
     public function __construct(Connection $database)
     {
         $this->db=$database;
     }
    if(isset($_POST['serialNumber']) and $_POST['brand'] and $_POST['model'] and $_POST['cylinder'] and $_POST['category'] and $_POST['price'])        
        {
            $db = new Connection();            
            $connexion = $db->getConnection();
            $moto = new Moto($_POST);
            $model = new Model($connexion);
            $model->add($moto);
            require('index.html');
            
}
?>