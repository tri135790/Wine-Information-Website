<<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results != -1) {
     echo ("<h3>Le producteur a été supprimé </h3>");
     
    } else {
     echo ("<h3>Problème de supression du Producteur</h3>");
//     echo ("id = " . $_GET['nom']);
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
