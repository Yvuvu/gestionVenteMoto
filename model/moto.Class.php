<?php
    class Moto
    {
        private $serialNumber;
        private $brand;
        private $model;
        private $cylinder;
        private $category;
        private $price;
        
        public function __construct(array $data)
        {
            $this->hydrate($data);
        }
        public function hydrate(array $data)
        {
            foreach ($data as $key => $value)
            {
                $method='set'.ucfirst($key);
                if(method_exists($this,$method))
                {
                $this->$method($value);
                }
            }
        }
        function getSerialNumber()
        {
            return $this->serialNumber;
        }
        function getBrand()
        {
            return $this->brand;
        }
        function getModel()
        {
            return $this->model;
        }
        function getCylinder()
        {
            return $this->cylinder;
        }
        function getCategory()
        {
            return $this->category;
        }
        function getPrice()
        {
            return $this->price;
        }
        function setSerialNumber($serie)
        {
            $this->serialNumber = $serie;
        }
        function setBrand($marque)
        {
            $this->brand = $marque;
        }
        function setModel($modele)
        {
            $this->model = $modele;
        }
        function setCylinder($cylindre)
        {
            $this->cylinder = $cylindre;
        }
        function setCategory($categorie)
        {
            $this->category = $categorie;
        }
        function setPrice($prix)
        {
            $this->price = $prix;
        }
    }
?>