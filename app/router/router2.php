
<!-- ----- debut Router1 -->
<?php
require ('../controller/ControllerVin.php');
require ('../controller/ControllerProducteur.php');
require ('../controller/ControllerRecolte.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);

//MOdification du routeur pour prendre en compte l'ensemble des parametres 
$action = $param['action'];

//On supprime l'element action de la structure 
unset($param['action']);

//Tout ce qui reste sont des arguments
$args = $param;

// --- Liste des méthodes autorisées
switch ($action) {
 case "vinReadAll" :
 case "vinReadOne" :
 case "vinReadId" :
 case "vinCreate" :
 case "vinCreated" :
 case "vinDeleted" :
 case "amelioration" :
 case "originalite" :
 
  ControllerVin::$action($args);
  break;
 
 case "listeProducteur" : 
 case "rechercheProducteurId" :
 case "producteurReadOne" :
 case "listeRegionDistinct" :
 case "insertionProducteur" :
 case "insertedProducteur" :
 case "producteurDeleted" :
     
     ControllerProducteur::$action($args);
     break;
 case "listeRecolte" : 
 case "listeProducteurVinParId" :
 case "afficheProducteurVinParId" :
 case "recolteReadIdVin" :
 case "recolteReadProducteurParIdVin":
 case "recolteReadIdProducteur" :
 case "recolteReadVinParIdProducteur" :
 case "insertionRecolte" : 
 case"insertedRecolte" :
     
     ControllerRecolte::$action($args);
     break;
 // Tache par défaut
 default:
  $action = "caveAccueil";
  ControllerVin::$action();
}
?>
<!-- ----- Fin Router1 -->

