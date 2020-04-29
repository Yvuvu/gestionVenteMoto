<?php
require_once '../model/autoload.php';


if (isset($_POST['serialNumber']) and $_POST['brand'] and $_POST['model'] and $_POST['cylinder'] and $_POST['category'] and $_POST['price'])
    {
        $db=new DbConnect();
        $conn=$db->getDb();      
        $manager = new MotoManager($conn);
        $moto = new Moto($_POST);
        $manager->add($moto);

        header("Location: ../controller/register.php");
        // echo $_POST['serialNumber'];
    }

require_once '../view/registerView.php';

?>