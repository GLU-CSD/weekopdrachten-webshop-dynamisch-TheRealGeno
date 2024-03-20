<?php
  include_once "products.php";

  $product = [];

  foreach ($products as $curr_product) {
    if ($curr_product["id"] == $_GET["id"]){
        $product = $curr_product;
        break;
    }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/info.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

<header>
<?php   
 include_once "header.php";
 ?>
</header>

    <div class="flex">
    <div id="productinfo">
        <div class="productphoto">
          <img src=<?php echo $product["imageSrc"] ?> alt="mainImage" width="400" height="400"  >
            </div>
        <div class="productinformation">
            <div class="producttitel"> <?php  echo $product["name"]  ?></div>
            <div class="containerphoto">
            <div class="productphoto1">check</div>
            <div class="productphoto1">check</div>
            <div class="productphoto1">check</div>
            </div>
            <div class="price"> <?php echo $product["price"]?></div>
            <div class="producttext">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam delectus porro harum deleniti odit quasi similique quas dolor, eius fuga eligendi, provident necessitatibus magni odio vel perferendis libero nulla alias!</div>
        </div>
    </div>
</div>
<footer>
<div class="blackbar">
    <div class="logo2"><img src="img/hyperxlogonobackground.png" alt="logo" width="200" height="50"></div>
</div>
<?php
include_once "footer.php";
?>
</footer>
</body>


</html>