<a href="/module2/productinfo.php?id=<?php echo $product["id"]?>"> <div class="box">
    <div class="productfoto"><img src="<?php echo $product["imageSrc"]?>" alt="<?php echo $product["name"]?>" height="200" width="200"></div>
    <div class="naam"><?php echo $product["name"]?></div>
    <div class="prijs"><?php echo $product["price"]?></div>
    <div class="shoppingcart"><img src="img/shoppingcart.png" alt="shoppingcart" height="25" width="25"></div>
</div></a>