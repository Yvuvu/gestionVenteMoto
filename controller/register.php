<?php 
require_once '../model/MotoManager.Class.php';
require_once '../model/autoload.php';
require_once '../model/connexion.php';


$bd=dbConnect();
$manager=new MotoManager($bd);

if (isset($_POST['serialNumber']) and $_POST['brand'] and $_POST['model'] and $_POST['cylinder'] and $_POST['category'] and $_POST['price'])
    {
        $manager = new MotoManager($bd);
        $moto = new Moto($_POST);
        $manager->add($moto);
        // echo $_POST['serialNumber'];
    }

require_once '../view/registerView.php';

?>