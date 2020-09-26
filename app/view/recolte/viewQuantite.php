
<!-- ----- début viewQuantite -->
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';

      // $results contient un tableau avec la liste des clés.
      ?>

    <form role="form" method='get' action='router2.php'>

      <div class="form-group">
        <input type="hidden" name='action' value='afficheProducteurVinParId'>        
        <label for="id">quantite minimum : </label><input type="number" name='quantite1' size='75' value='20' >  
        <label for="id">quantite maximum : </label><input type="number" name='quantite2' size='75' value='50' > 
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <p/>
  </div>

  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewQuantite -->