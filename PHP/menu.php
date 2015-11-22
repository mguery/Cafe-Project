<?php
define("TITLE", "Our Menu | Caf&eacute; Belle");

$companyName = "Caf&eacute; Belle";

include("header.php");

?>

<h2 class="text-center">Menu</h2>
<div class="row">
  <div class="col-md-6">
    <ul>
      <h3>Breakfast (until 10am)</h3>
      <li>Egg Sandwich $3<small> - croissant, bagel, or toast / cheese, sausage, bacon</small></li>
      <li>Oatmeal $2<small> - apples, berries, or cinnamon sugar</small></li>
      <li>Cookies 3 for $1<small> - chocolate chip, oatmeal raisin, or double chocolate</small></li>
      <li>Muffins $1<small> - bran, berries, or chocolate</small></li>
    </ul>									
  </div>

  <div class="col-md-6">
    <ul>
      <h3>Lunch</h3>
      <li>Tuna salad $3<small> - classic, w/chicken, southwest</small></li>
      <li>Salad $4<small> - croutons, avocado, spinach or lettuce, tomatoes, dressing</small></li>
      <li>Soup $3<small> - chicken, vegetable, minestrone, pumpkin</small></li>
      <li>BLT $4<small> - wheat or white toast, plain or everything bagel</small></li>
    </ul>										
  </div>	
</div>

  <div class="row">
    <div class="col-md-6">
      <ul><h3>Beverages</h3><small>small - $1, med. - $2, large - $3</small>
      <li>Teas<small> - black, green, mint</small></li>
      <li>Coffee<small>- hazelnut, mocha, iced</small></li>
      <li>Other<small> - hot chocolate, orange juice, apple juice, bottled water </small></li>			
      <li>Extras<small> - skim milk, almond milk, soy milk</small></li><br>			
      <a class="btn btn-success btn-lg" href="#" role="button">Download Menu</a> 
      </ul>
    </div>
    
    <div class="col-md-6">
      <img src="images/coffee-cup.jpeg" alt="coffee" class="img-thumbnail">
    </div>
  </div>

<?php

include("footer.php");

?>
