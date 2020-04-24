<?php
require_once 'connexion.php';

class Moto {
    private $serialNumber;
    private $brand;
    private $model;
    private $cylinder;
    private $category;
    private $price;

    // public function __construct(array $data){

    //     foreach ($data as $key => $value) {
    
    //         $method='set'.ucfirst($key);
            
    //         if((method_exists($this,$method))){
    //           $this->$method($value);
    //         }
    //     }
    //   }

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }
  
    public function hydrate(array $data)
    {
        foreach ($data as $key => $value){
            $method='set'.ucfirst($key);
            if((method_exists($this,$method))){
            $this->$method($value);
        }
    }
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    public function getModel()
    {
        return $this->model;
    }
    public function getCylinder()
    {
        return $this->cylinder;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getPrice()
    {
        return $this->price;
    }

    // function getMotos($brand)
    // {
    //     $db = dbConnect();
    //     $motos = $db->prepare('SELECT * FROM Moto WHERE $brand = ? ORDER BY price');
    //     $motos->execute(array($brand));

    //     return $motos;
    // }

    // function getAll(){
    //     $patients=$this->base->query("SELECT * FROM patients");
    //     return $patients->fetchAll();
    // }

    // function getBrand($idBrand)
    // {
    //     $db = dbConnect();
    //     $req = $db->prepare('SELECT name FROM Brand WHERE id = ?');
    //     $req->execute(array($idBrand));
    //     $brand = $req->fetch();
    //     return $brand;
    // }

    }
    ?>