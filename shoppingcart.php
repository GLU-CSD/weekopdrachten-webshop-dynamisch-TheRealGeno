<?php
 session_start();

 include_once 'products.php';

 if (isset($_GET['destroy'])) {
  session_destroy();
  header('Location: ' . $_SERVER['PHP_SELF']);
  exit();
}



// var_dump($_SESSION);
?>




<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Shoppingcart</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/shoppingcart.css">
  </head>
  <body>
    <div class="destroy"><a href="shoppingcart.php?destroy=1">destroy session</a></div>
    <header><?php include_once "header.php" ?></header>
    <div class="container1">  
      <div id="cartContainer">
      <?php
          if (isset($_SESSION['cart'])) { 

              foreach ($_SESSION['cart'] as $productid => $quantity) {
                  // echo 'id: ' . $productid . ' - aantal: ' . $_SESSION['cart'][$productid] . "<br>";

                  foreach ($products as $product) {
                      if ($product['id'] == $productid) {?>
                  
                        <div class="cartInfo">
                            <div class="productName"><div><?= $product['name'] ?></div></div>
                            <div class="amount"><div> Amount <?= $_SESSION['cart'][$productid] ?> </div></div>
                            <hr class="lijn4">
                            <div class="productPrice"><div> Price <?= $product['price']?> </div></div>
                            <hr class="lijn4">
                            <div class="imageContainer">
                            <div class="productimages">
                            <img src="<?= $product["imageSrc"]?>" alt="<?php echo $product["name"]?>" height="100" width="100">
                            </div>
                            </div>
                        </div>
                      
                          <?php
                    }
                  }
               }
            }
      ?>
      <div class="Checkout"><a href="./pages/factuur.html" > <div class="buttonText">Checkout</div> </a></div>
    </div>
  </div>
  <footer>
    <div class="blackbar" >
    <div class="logo2"><img src="img/hyperxlogonobackground.png" alt="logo" width="200" height="50"></div>
    </div>
        <?php include_once "footer.php" ?>
    </footer>
  </div>
</body>
</html>