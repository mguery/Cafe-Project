<?php

define("TITLE", "Contact Us | Caf&eacute; Belle");

$companyName = "Caf&eacute; Belle";	

include("header.php");

?>

<div class="row">
  <div class="col-md-6">
    <h3>We're happy to hear from our customers!</h3>
    <p>Black cappuccino, lungo con panna viennese decaffeinated brewed aftertaste carajillo viennese iced to go. Blue mountain, body, coffee siphon redeye in, black breve siphon crema irish.</p>
    <p>Saucer steamed a saucer crema cultivar grounds. Seasonal, single shot macchiato doppio french press viennese so cup shop french press latte.</p>
    <p>Aftertaste cappuccino, espresso black con panna blue mountain, variety crema mazagran turkish dark ristretto. Trifecta shop siphon as crema iced shop grinder brewed.</p>
  </div>

<div class="col-md-6">
  <form>
    <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1"></label>
    <textarea class="form-control" rows="3"  placeholder="Message"></textarea>
    </div>
    <div class="form-group">
    <p class="help-block">(Job applicants: Paste resume here.)</p>
    </div>
    <div class="checkbox">
    <label>
    <input type="checkbox">Subscribe to our newsletter?
    </label>
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
  </form>
</div>
</div>
<?php

include("footer.php");

?>
