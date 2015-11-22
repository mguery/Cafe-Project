<?php
define("TITLE", "Home | Caf&eacute; Belle");

$companyName = "Caf&eacute; Belle";	

include("header.php");

?>

  <div class="homepage  row">
    <div class="col-md-6  text-center">
      <h3><?php echo date("l"); ?>'s Special:</h3>
      <h4>Roast rich, black at aged cup ut and galão. In, id aromatic coffee, fair trade shop cup beans grinder.</h4>
      <img src="images/cafebelle.png" alt="Coffee Shop Menu" height="400" width="400">
    </div>

    <div class="col-md-6  text-center">
      <h3>Catering</h3>
      <h4>We specialise in wedding and celebration cakes. We know you will want to the right cake for your celebration, which is why if you pop into our shop, you can try before you order. We also sell day to day baked goods in our shop from a basic loaf of bread to a naughty little cupcake or pastry.</h4>
      <img src="images/cupcake.jpeg" alt="Catering" height="300" width="450">
      <p class="bg-warning text-justified"><small>Rated Best Cupcakes in 2015 by ABC Local</small></p>
    </div>
  </div>

<?php

include("footer.php");

?>
