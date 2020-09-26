
<!-- ----- debut ModelRecolte -->
<?php
require_once 'Model.php';

class ModelRecolte {

 private $producteur_id, $vin_id, $quantite;

 // pas possible d'avoir 2 constructeurs
 public function __construct($producteur_id = NULL, $vin_id = NULL, $quantite = NULL) {
  // valeurs nulles si pas de passage de parametres
  if ((!is_null($producteur_id)) && (!is_null($vin_id))) {
   $this->producteur_id = $producteur_id;
   $this->vin_id = $vin_id;
   $this->quantite = $quantite;
   
  }
 }
 function getProducteur_id() {
     return $this->producteur_id;
 }

 function getVin_id() {
     return $this->vin_id;
 }

 function getQuantite() {
     return $this->quantite;
 }

 function setProducteur_id($producteur_id) {
     $this->producteur_id = $producteur_id;
 }

 function setVin_id($vin_id) {
     $this->vin_id = $vin_id;
 }

 function setQuantite($quantite) {
     $this->quantite = $quantite;
 }

 

 // Persistance .......


 public static function view() {
  printf("<tr><td>%d</td><td>%d</td><td>%d</td></tr>", $this->getProducteur_id(), $this->getVin_id(), $this->getQuantite());
 }

// retourne une liste des producteurs et vin par quantite
 public static function getProducteurVinParId($quantite1,$quantite2) {
  try {
   $database = Model::getInstance();
   $query = "select * from recolte where quantite >= :quantite1 and quantite <= :quantite2 order by quantite";
   $statement = $database->prepare($query);
   $statement->execute([
     'quantite1' => $quantite1,
     'quantite2' => $quantite2
   ]);
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
  public static function getMany($query) {
  try {
   $database = Model::getInstance();
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 public static function getListeRecolte(){
     
     
     $query = "select * from recolte";
     return ModelRecolte::getMany($query);
 }
 //retourne une liste de  vin id
public static function getAllIdVin() {
  try {
   $database = Model::getInstance();
   $query = "select distinct vin_id from recolte";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 public static function getProducteurParIdVin($id) {
  try {
   $database = Model::getInstance();
   $query = "select * from recolte where recolte.vin_id = :id ";
   $statement = $database->prepare($query);
   $statement->execute([
     'id' => $id
   ]);
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 public static function getAllIdProducteur() {
  try {
   $database = Model::getInstance();
   $query = "select distinct producteur_id from recolte";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_COLUMN, 0);
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 public static function getVinParIdProducteur($id) {
  try {
   $database = Model::getInstance();
   $query = "select * from recolte where producteur_id = :id ";
   $statement = $database->prepare($query);
   $statement->execute([
     'id' => $id
   ]);
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
  public static function insert($producteur_id, $vin_id, $quantite) {
  try {
   $database = Model::getInstance();
  
    $query = "insert into recolte value (:producteur_id, :vin_id, :quantite)";
   $statement = $database->prepare($query);
   $statement->execute([
     'producteur_id' => $producteur_id,
     'vin_id' => $vin_id,
     'quantite' => $quantite
   ]);
   return $producteur_id;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }

}
?>
<!-- ----- fin ModelRecolte -->


