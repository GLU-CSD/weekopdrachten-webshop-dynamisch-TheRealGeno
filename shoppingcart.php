<?php
 session_start();

 include_once 'products.php';

 if (isset($_GET['destroy'])) {
  session_destroy();
  header('Location: ' . $_SERVER['PHP_SELF']);
  exit();
}


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
<div class="destroy"><a href="productinfo.php?destroy=1">destroy session</a></div>
    <header>
      <?php
        include_once "header.php";
      ?>
    </header>
    
    <?php
        if (isset($_SESSION['cart'])) { 

            foreach (array_keys($_SESSION['cart']) as $productid) {
                //echo 'id: ' . $productid . ' - aantal: ' . $_SESSION['cart'][$productid] . "<br>";

                foreach ($products as $product) {
                    if ($product['id'] == $productid) {
    ?>
    
    <div> <?= $product['name'] ?> - aantal : <?= $_SESSION['cart'][$productid] ?>
<div class="container1">  
 <div id="cartContainer">
     <div class="productimages">
      hallo
     </div>
     <div class="cartInfo">
        <div class="productName"><div> <?= $product['name'] ?> - aantal : <?= $_SESSION['cart'][$productid] ?></div></div>
        <div class="amount"> <?php ?> </div>
        <hr class="lijn4">
        <div class="productPrice">hallo</div>
        <hr class="lijn4">
        <div class="Checkout"><a href="./pages/factuur.html" > <div class="buttonText">Checkout</div> </a></div>
     </div>
   </div>
   </div>
    <footer>
      <div class="blackbar">
      <div class="logo2"><img src="img/hyperxlogonobackground.png" alt="logo" width="200" height="50"></div>
      <?php
       include_once "footer.php"
      ?>
    </footer>
</div>  
                        <?php
                    }
                 }
              }
          }
      ?>
</body>
</html>