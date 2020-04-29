<?php
require_once 'Moto.Class.php';
require_once 'DbConnect.Class.php';
class MotoManager
{
    private $db; //Instance de PDO.

    public function __construct($db)
    {
        // $this->db=$GLOBALS["db"];
        $this->db = $db;
        // $this->setDb($db);
    }

    public function add(Moto $moto)
    {
      $db=new DbConnect();
      //  $conn=$db->getDb();
        $q = $this->db->prepare('INSERT INTO moto SET serialNumber =:serialNumber, brand =:brand, model =:model, cylinder =:cylinder, category =:category, price =:price');
        $q->bindValue(':serialNumber', $moto->getSerialNumber());
        $q->bindValue(':brand', $moto->getBrand());
        $q->bindValue(':model', $moto->getModel());
        $q->bindValue(':cylinder', $moto->getCylinder());
        $q->bindValue(':category', $moto->getCategory());
        $q->bindValue(':price', $moto->getPrice()); 

        $q->execute();
    }

  public function get($id)
  {
    $q=$this->db->query("SELECT * FROM moto WHERE id=".$id);
    $row=$q->fetch();
    $q->closeCursor();
    $m=new Moto($row);
    return $m;
  }
 
  //   public function supprimer($id)
  //   {
  //     $q=$this->db->exec("DELETE  FROM moto WHERE id=".$id);
  //     return $q>0;
  //   }
    
  public function getList()
  {
    $moto = [];
    $q = $this->db->query('SELECT * FROM moto ORDER BY brand');
    $rows = $q->fetchAll();
    $q->closeCursor();
      
    foreach ($rows as $row) {
 
    $moto[] = new Moto($row);
    }
    return $moto;
  }

  public function list_yamaha()
  {
    $moto = [];
    $q=$this->db->query('SELECT * FROM moto WHERE brand="yamaha"');
    $rows = $q->fetchAll();
    $q->closeCursor();
      
    foreach ($rows as $row) {
 
    $moto[] = new Moto($row);
    }
    return $moto;
  }

  public function list_ktm()
  {
    $moto = [];
    $q=$this->db->query('SELECT * FROM moto WHERE brand="ktm"');
    $rows = $q->fetchAll();
    $q->closeCursor();
      
    foreach ($rows as $row) {
 
    $moto[] = new Moto($row);
    }
    return $moto;
  }

  public function list_honda()
  {
    $moto = [];
    $q=$this->db->query('SELECT * FROM moto WHERE brand="honda"');
    $rows = $q->fetchAll();
    $q->closeCursor();
      
    foreach ($rows as $row) {
 
    $moto[] = new Moto($row);
    }
    return $moto;
  }

  public function list_suzuki()
  {
    $moto = [];
    $q=$this->db->query('SELECT * FROM moto WHERE brand="suzuki"');
    $rows = $q->fetchAll();
    $q->closeCursor();
      
    foreach ($rows as $row) {
 
    $moto[] = new Moto($row);
    }
    return $moto;
  }

//   function getList(){
//     $moto=$this->db->query("SELECT * FROM moto");
//     return $moto->fetchAll();
// }


  // public function list_yamaha()
  //   {
  //       $moto=[];
  //       $q=$this->db->query('SELECT * FROM moto WHERE marque="yamaha"');
  //       $rows=$q->fetchAll();
  //       $q->closeCursor();
  //       foreach ($rows as $row)
  //       {
  //           $moto[]=new Moto($row);
  //       }
  //       return $moto;
  //   }

  //   public function liste_rato()
  //   {
  //       $moto=[];
  //       $resq=$this->_db->query('SELECT * FROM moto WHERE marque="rato"');
  //       $donnee=$resq->fetchAll();
  //       $resq->closeCursor();
  //       foreach ($donnee as $donnees)
  //       {
  //           $moto[]=new Moto ($donnees);
  //       }
  //       return $moto;
  //   }

  //   public function liste_kaiser()
  //   {
  //       $moto=[];
  //       $resq=$this->_db->query('SELECT * FROM moto WHERE marque="kaiser"');
  //       $donnee=$resq->fetchAll();
  //       $resq->closeCursor();
  //       foreach ($donnee as $donnees)
  //       {
  //           $moto[]=new Moto ($donnees);
  //       }
  //       return $moto;
  //   }
 
  // public function modifier(Moto $moto)
  //   {
  //     try{ 
  //            $q=$this->db->prepare("UPDATE  moto SET nom =:nom, prenom =:prenom, genre =:genre, 
  //            addresse =:addresse, telephone =:telephone, age=:age, g_sanguin=:g_sanguin, m_actuelle=:m_actuelle,
  //            antecedant=:antecedant WHERE id=:id");
  //            $d=$q->execute(array('nom'=>$moto->getNom(),
  //            'prenom'=>$moto->getPrenom(),
  //            'genre'=>$moto->getGenre(),
  //            'addresse'=>$moto->getAddresse(),
  //            'telephone'=>$moto->getTelephone(),
  //            'age'=>$moto->getAge(),
  //            'g_sanguin'=>$moto->getG_sanguin(),
  //            'm_actuelle'=>$moto->getM_actuelle(),
  //            'antecedant'=>$moto->getAntecedant(),
  //            'id'=>$moto->getId()
  //          ));  
  //     } catch (Exception $ex) {
  //         echo $ex->getMessage();
  //     }
  //   }
 }
 ?>