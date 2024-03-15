<?php
$products = [
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
    ["name" => "Cloud II Wireless - Gaming Headset", "price" => "84,99$", "imageSrc" => "img/hyperxred-Photoroom.png-Photoroom.png"],
];

// Function gen html for product
function generateProductHTML($product) {
    return '
        <div class="box">
            <div class="productfoto"><img src="' . $product["imageSrc"] . '" alt="' . $product["name"] . '" height="200" width="200"></div>
            <div class="naam">' . $product["name"] . '</div>
            <div class="prijs">' . $product["price"] . '</div>
            <div class="shoppingcart"><img src="img/shoppingcart.png" alt="shoppingcart" height="25" width="25"></div>
        </div>
    ';
}

//  HTML for  products
$productsHTML = '';
foreach ($products as $product) {
    $productsHTML .= generateProductHTML($product);
}
?>


<div class="products">
    <?php echo $productsHTML; ?>
</div>
