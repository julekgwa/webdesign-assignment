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
    <title>Contact Us</title>
    <?php require_once('includes/header.php') ?>

    <div class="container">
      <h2>Contact Us</h2>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Contact us</legend>

            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Name</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
              </div>
            </div>

            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Your E-mail</label>
              <div class="col-md-9">
                <input id="email" name="email" type="text" placeholder="Your email" class="form-control">
              </div>
            </div>

            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>

            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
    </div><!--end container-->
    <?php require_once('includes/footer.php') ?>
  </body>
</html>
