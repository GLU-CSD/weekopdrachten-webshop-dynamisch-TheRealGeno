<?php
// Sample product array
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

    // Add more product arrays as needed
];

// Function to generate HTML for a single product
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

// Generate HTML for all products
$productsHTML = '';
foreach ($products as $product) {
    $productsHTML .= generateProductHTML($product);
}
?>

<!-- Output the products HTML -->
<div class="products">
    <?php echo $productsHTML; ?>
</div>
