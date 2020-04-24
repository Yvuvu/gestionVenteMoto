<?php 
require_once '../model/MotoManager.Class.php';
require_once '../model/connexion.php';
require_once '../model/autoload.php';


$bd = dbConnect();
$manager = new MotoManager($bd);

$list = $manager->getList();

require '../view/yamahaView.php';

?>