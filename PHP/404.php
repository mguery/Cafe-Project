<?php
define("TITLE", "Page Not Found | Caf&eacute; Belle");

$companyName = "Caf&eacute; Belle";	

include("header.php");

date_default_timezone_set('America/New _York'); 
?>

<div class="row">
  <div class="col-md-4">
    <h1>Error: 404</h1>
    <p class="lead">The page you're looking for could not be found.<br>But, since you're here, check out some recipes to try at home:</p>
  </div>
  <div class="col-md-8">
    <iframe width="500" height="400" src="https://www.youtube.com/embed/ooUAVHJAcyk" frameborder="0" allowfullscreen></iframe>
  </div>
</div>


<?php

include("footer.php");

?>
