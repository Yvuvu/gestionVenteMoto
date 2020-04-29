<?php
    include ('../model/model.Class.php');    
    include ('../model/moto.Class.php');
    // $connexion = new Connection();
    function connect()
    {    
        try
        {
            $connexion = new PDO ('mysql:host=localhost; dbname=vente','root','');
        }
        catch(Exception $e)
        {
            die('Erreur'.$e->getMessage());
        }
        return $connexion;
    }
    $connexion = connect();
    if(isset($_POST['serialNumber']) and $_POST['brand'] and $_POST['model'] and $_POST['cylinder'] and $_POST['category'] and $_POST['price'])        
        {
            $moto = new Moto($_POST);
            $model = new Model($connexion);
            $model->add($moto);
            require('../view/formView.php');
        }  
?>