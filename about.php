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
    <title>About Us</title>
    <?php require_once('includes/header.php') ?>

    <div class="container">
<h2>About Us</h2>
<p>We are an Online shopping store, which sells a variety of items at a low price. We aim to bridge the gap between our customers and provide the best service to our clients.</p>
    </div><!--end container-->
    <?php require_once('includes/footer.php') ?>
  </body>
</html>
