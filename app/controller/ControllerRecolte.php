<!-- ----- debut ControllerRecolte -->
<?php
require_once '../model/ModelRecolte.php';

class ControllerRecolte {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.html';
  if (DEBUG)
   echo ("ControllerRecolte : caveAccueil : vue = $vue");
  require ($vue);
 }
 //Liste des producteur et vin par quantite
 public static function listeProducteurVinParId() {
     
     
     include 'config.php';
     $vue = $root . '/app/view/recolte/viewQuantite.php';
    require ($vue);
    
 }
//affiche le liste des producteur et vin par quantite
 public static function afficheProducteurVinParId() {
  $quantite1 = $_GET['quantite1'];
  $quantite2 = $_GET['quantite2'];
  
  $results = ModelRecolte::getProducteurVinParId($quantite1,$quantite2);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewAll.php';
  require ($vue);
 }
 
  // --- Liste des recoltes
 public static function listeRecolte() {
  $results = ModelRecolte::getListeRecolte();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewAll.php';
  if (DEBUG)
   echo ("ControllerRecolte : RecolteReadAll : vue = $vue");
  require ($vue);
 }
 
 // Affiche un formulaire pour sélectionner un id qui existe
 public static function recolteReadIdVin() {
  $results = ModelRecolte::getAllIdVin();

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewIdVin.php';
  require ($vue);
 }
 
 public static function recolteReadProducteurParIdVin() {
  $vin_id = $_GET['id'];
  $results = ModelRecolte::getProducteurParIdVin($vin_id);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewAll.php';
  require ($vue);
 }
 
 // Affiche un formulaire pour sélectionner un id qui existe
 public static function recolteReadIdProducteur() {
  $results = ModelRecolte::getAllIdProducteur();

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewIdProducteur.php';
  require ($vue);
 }
 
 public static function recolteReadVinParIdProducteur() {
  $producteur_id = $_GET['id'];
  $results = ModelRecolte::getVinParIdProducteur($producteur_id);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewAll.php';
  require ($vue);
 }
 
   public static function insertionRecolte() {
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewInsert.php';
  require ($vue);
 }
  public static function insertedRecolte() {
  // ajouter une validation des informations du formulaire
  $results = ModelRecolte::insert(
      htmlspecialchars($_GET['producteur_id']), htmlspecialchars($_GET['vin_id']), htmlspecialchars($_GET['quantite'])
  );
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewInserted.php';
  require ($vue);
  }
 
}
 ?> 

