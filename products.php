<?php
    session_start();
    require("includes/connection.php");

    $cart_items = 0;

    if (isset($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $item) {
        $cart_items += $item['quantity'];
      }
    }

    if(isset($_GET['action']) && $_GET['action']=="add"){

        $id=intval($_GET['id']);

        if(isset($_SESSION['cart'][$id])){

            $_SESSION['cart'][$id]['quantity']++;

        }else{

            $sql = "SELECT * FROM products WHERE id_product={$id}";
            $getRows = $conn->query($sql);
            $row_count = $getRows->rowCount();
            if($row_count != 0) {

                foreach ($getRows as $row) {
                  $_SESSION['cart'][$row['id_product']] = array(
                    'quantity' => 1,
                    'price' => $row['price']
                  );
                }

            }else{

                $message="This product id it's invalid!";

            }

        }

    }

    $stmt = $conn->query('SELECT * FROM products');
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Products</title>
    <?php require_once('includes/header.php') ?>

    <div class="container">

    <div class="row">

      <?php foreach ($results as $row) : ?>

      <div class="col-sm-3">
          <img class="img-fluid" src="<?php echo $row['image']; ?>" class="product" alt="" />
          <div class="row">
              <div class="col-sm-6">
                <p><?php echo $row['name']; ?> <span class="price"><br>R <?php echo $row['price']; ?></span></p>
              </div>
              <div class="col-sm-6">
                <p class="add-to-cart"><a href="index.php?page=products&action=add&id=<?php echo $row['id_product'] ?>">Add to cart</a></p>
              </div>
          </div>
      </div>

      <?php endforeach; ?>

    </div><!--end main-->

    </div><!--end container-->
    <?php require_once('includes/footer.php') ?>
  </body>
</html>
