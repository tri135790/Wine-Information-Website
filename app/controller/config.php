
<!-- ----- debut config -->
<?php

// Eviter de declarer plusieurs fois le const DEBUG
include_once 'debug.php';

// Configuration de la base de données

$dsn='mysql:dbname=trantha1;host=localhost;charset=utf8';
    $username='trantha1';
    $password='ve6JeL9X'; 


// chemin absolu vers le répertoire du projet SUR DEV-ISI 
$root = dirname(dirname(__DIR__)) . "";


if (DEBUG) {
 echo ("<ul>");
 echo (" <li>dsn = $dsn</li>");
 echo (" <li>username = $username</li>");
 echo (" <li>password = $password</li>");
 echo ("<li>---</li>");
 echo (" <li>root = $root</li>");

 echo ("</ul>");
}
?>

<!-- ----- fin config -->



