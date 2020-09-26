
<!-- ----- debut ControllerProducteur -->
<?php
require_once '../model/ModelProducteur.php';

class ControllerProducteur {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.html';
  if (DEBUG)
   echo ("ControllerProducteur : caveAccueil : vue = $vue");
  require ($vue);
 }

 // --- Liste des producteurs
 public static function listeProducteur() {
  $results = ModelProducteur::getListeProducteur();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewAll.php';
  if (DEBUG)
   echo ("ControllerProducteur : producteurReadAll : vue = $vue");
  require ($vue);
 }


public static function rechercheProducteurId($args){
    if (DEBUG) echo ("ControllerProducteur:rechercheProducteurId:begin</br>");
  $results = ModelProducteur::getAllId();
 $target = $args['target'];
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewId.php';
  require ($vue);
}
 public static function producteurReadOne() {
  $vin_id = $_GET['id'];
  $results = ModelProducteur::getProducteurById($vin_id);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewAll.php';
  require ($vue);
 }
 public static function listeRegionDistinct() {
  $results = ModelProducteur::getListeRegionDistinct();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewRegion.php';
  if (DEBUG)
   echo ("ControllerProducteur : producteurReadAll : vue = $vue");
  require ($vue);
 }
  public static function insertionProducteur() {
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewInsert.php';
  require ($vue);
 }
  public static function insertedProducteur() {
  // ajouter une validation des informations du formulaire
  $results = ModelProducteur::insert(
      htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['region'])
  );
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewInserted.php';
  require ($vue);
 }
 public static function producteurDeleted() {
     //supprimer une vin
     $producteur_id = $_GET['id'];
     $results = ModelProducteur::delete($producteur_id);
     include 'config.php';
     $vue = $root . '/app/view/producteur/viewDeleted.php';
    require ($vue);
 }
 
 
 
}
 ?> 

<!-- ----- fin ControllerProducteur -->


