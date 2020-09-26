
<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>

    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">producteur_id</th>
          <th scope = "col">vin_id</th>
          <th scope = "col">quantite</th>
        </tr>
      </thead>
      <tbody>
          <?php
          // La liste des recolte est dans une variable $results             
          foreach ($results as $element) {
           printf("<tr><td>%d</td><td>%d</td><td>%d</td></tr>", $element->getProducteur_id(), $element->getVin_id(), $element->getQuantite());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->