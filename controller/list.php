<?php 
require_once '../model/autoload.php';


$db=new DbConnect();
$conn=$db->getDb();      
$manager = new MotoManager($conn);

$list = $manager->getList();

require_once '../view/listView.php';

?>