<?php 
require_once '../model/autoload.php';


$db=new DbConnect();
$conn=$db->getDb();      
$manager = new MotoManager($conn);

$list = $manager->list_ktm();

require '../view/ktmView.php';

?>