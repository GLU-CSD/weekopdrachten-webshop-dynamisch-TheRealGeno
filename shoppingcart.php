<?php
 session_start();
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
    <header>
      <?php
        include_once "header.php";
      ?>
    </header>
  <div class="container1">  
   <div id="cartContainer">
     <div class="productimages">
      hallo
     </div>
     <div class="cartInfo">
        <div class="productName">hallo</div>
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
</div>
      <?php
       include_once "footer.php"
      ?>
    </footer>
</body>
</html>