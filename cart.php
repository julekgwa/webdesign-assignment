<?php
    session_start();
    require("includes/connection.php");

    $cart_items = 0;

    if (isset($_SESSION['cart'])) {
      foreach ($_SESSION['cart'] as $item) {
        $cart_items += $item['quantity'];
      }
    }

    if(isset($_POST['submit'])){

    foreach($_POST['quantity'] as $key => $val) {
        if($val==0) {
            unset($_SESSION['cart'][$key]);
        }else{
            $_SESSION['cart'][$key]['quantity']=$val;
        }
    }

    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Shopping cart</title>
    <?php require_once('includes/header.php') ?>

    <div class="container">

    <div class="row">
      <a href="products.php">Go back to products page</a>
      <div class="col-sm-12">
        <form method="post" action="index.php?page=cart">

            <table class="table table-bordered">

                <tr>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Items Price</th>
                </tr>

                <?php

                    $sql="SELECT * FROM products WHERE id_product IN (";

                            foreach($_SESSION['cart'] as $id => $value) {
                                $sql.=$id.",";
                            }

                            $sql=substr($sql, 0, -1).") ORDER BY name ASC";
                            $query = $conn->query($sql);
                            $totalprice = 0;
                            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                $subtotal = $_SESSION['cart'][$row['id_product']]['quantity']*$row['price'];
                                $totalprice += $subtotal;
                            ?>
                                <tr>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><input type="text" name="quantity[<?php echo $row['id_product'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id_product']]['quantity'] ?>" /></td>
                                    <td>R<?php echo $row['price'] ?></td>
                                    <td>R<?php echo $_SESSION['cart'][$row['id_product']]['quantity']*$row['price'] ?></td>
                                </tr>
                            <?php

                            }
                ?>
                            <tr>
                                <td colspan="4">Total Price: <?php echo $totalprice ?></td>
                            </tr>

            </table>
            <br />
            <button type="submit" name="submit">Update Cart</button>
        </form>
        <br />
      </div>
      <div class="row">
        <p>To remove an item, set it's quantity to 0. </p>
      </div>
    </div><!--end main-->

    </div><!--end container-->
    <?php require_once('includes/footer.php') ?>
  </body>
</html>
