<?php
    // include('connexion.Class.php');
class Model 
{
    private $db;
    public function __construct($base)
    {
         return $this->db= $base;
    }

    public function add(Moto $moto)
    {
        $q=$this->db->prepare('INSERT INTO moto SET serialNumber = :serialNumber, brand = :brand, model = :model,
        cylinder = :cylinder,category = :category, price = :price');
        $q->bindValue(':serialNumber', $moto->getSerialNumber());
        $q->bindValue(':brand', $moto->getBrand());
        $q->bindValue(':model', $moto->getModel());
        $q->bindValue(':cylinder', $moto->getCylinder());
        $q->bindValue(':category', $moto->getCategory());
        $q->bindValue(':price', $moto->getPrice());        
        $q->execute();
    }
?>