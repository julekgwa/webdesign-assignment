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
    <title>FAQs</title>
    <?php require_once('includes/header.php') ?>

    <div class="container">
      <h2>FAQs</h2>
      <ul class="list-group">
        <li class="list-group-item" data-toggle="collapse" data-target="#footwear" aria-expanded="false" aria-controls="footwear">How to place an order
          <div class="collapse" id="footwear">
          <p>Add the iterms in to cart and then click checkout</p>
          </div>
        </li>
        <li class="list-group-item" data-toggle="collapse" data-target="#pay" aria-expanded="false" aria-controls="pay">How I pay with cash
          <div class="collapse" id="pay">
          <p>it means you can pay for this item with cash when your driver delivers your goods.</p>
          </div>
        </li>
        <li class="list-group-item" data-toggle="collapse" data-target="#eft" aria-expanded="false" aria-controls="eft">When will my Instant EFT payment clear
          <div class="collapse" id=eft>
            <p>When paying by Instant EFT, there will be no waiting period before your payment is received and your order is authorised.</p>
          </div>
        </li>
      </ul>
    </div><!--end container-->
    <?php require_once('includes/footer.php') ?>
  </body>
</html>
