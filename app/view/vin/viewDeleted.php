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
    if ($results!= -1) {
     echo ("<h3>Le vin a été supprimé </h3>");
     
    } else {
     echo ("<h3>Problème de supression du Vin</h3>");
//     echo ("id = " . $_GET['cru']);
    }

    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
