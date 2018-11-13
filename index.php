<?php
    session_start();
    require("includes/connection.php");

    $cart_items = 0;

    if (isset($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $item) {
        $cart_items += $item['quantity'];
      }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Shopping cart</title>
    <?php require_once('includes/header.php') ?>

    <div class="container">
      <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item mx-auto active">
      <img src="images/deals.png" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="images/sale.png" alt="Chicago">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<h3><a href="products.php">see our products </a></h3>
    </div><!--end container-->
    <?php require_once('includes/footer.php') ?>
  </body>
</html>
